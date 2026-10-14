<?php

namespace App\Services;

use App\Models\AgenteNotificacion;
use App\Models\IngresoSalida;
use App\Models\Mapeo;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
use RuntimeException;
use Throwable;
use Illuminate\Support\Facades\Config;

class AgenteInteligenteService
{
    public function __construct()
    {
        $servidor_correo = [
            "driver" => "smtp",
            "host" => "smtp.gmail.com",
            "puerto" => "587",
            "encriptado" => "tls",
            "correo" => "kingceroci1.as@gmail.com",
            "password" => "ylzuqasgpabjborl",
            "nombre" => "PARKVIA",
        ];
        Config::set(
            [
                'mail.mailers.default' => $servidor_correo["driver"] ?? 'smtp',
                'mail.mailers.smtp.host' => $servidor_correo["host"] ?? 'smtp.hostinger.com',
                'mail.mailers.smtp.port' => $servidor_correo["puerto"] ?? '587',
                'mail.mailers.smtp.encryption' => $servidor_correo["encriptado"] ?? 'tls',
                'mail.mailers.smtp.username' => $servidor_correo["correo"] ?? 'mensaje@emsytsrl.com',
                'mail.mailers.smtp.password' => $servidor_correo["password"] ?? '8Z@d>&kj^y',
                'mail.from.address' => $servidor_correo["correo"] ?? 'mensaje@emsytsrl.com',
                'mail.from.name' => $servidor_correo["nombre"] ?? 'PARKVIA',
            ]
        );
    }

    public function notificarSalidasMensuales(): array
    {
        $estados = config('agente.salida_mensual_status_vigentes', []);

        if (empty($estados)) {
            throw new RuntimeException(
                'Configura los estados vigentes de SALIDA MENSUAL antes de ejecutar el agente.'
            );
        }

        $fechaObjetivo = Carbon::now(config('agente.timezone'))
            ->addDays(2)
            ->toDateString();

        $enviados = 0;
        $omitidos = 0;
        $errores = 0;

        IngresoSalida::query()
            ->with(['vehiculo.propietario'])
            ->where('tipo', 'SALIDA MENSUAL')
            ->whereIn('status', $estados)
            ->whereDate('fecha_reg', $fechaObjetivo)
            ->orderBy('id')
            ->chunkById(100, function ($registros) use (
                &$enviados,
                &$omitidos,
                &$errores,
                $fechaObjetivo
            ) {
                foreach ($registros as $registro) {
                    $vehiculo = $registro->vehiculo;
                    $propietario = $vehiculo?->propietario;

                    if (!$vehiculo || !$propietario || !$propietario->correo) {
                        $omitidos++;
                        continue;
                    }

                    $clave = "salida_mensual:{$registro->id}:{$fechaObjetivo}";

                    try {
                        $resultado = $this->enviarUnaVez(
                            clave: $clave,
                            tipo: 'SALIDA_MENSUAL',
                            datos: [
                                'ingreso_salida_id' => $registro->id,
                                'vehiculo_id' => $vehiculo->id,
                                'propietario_id' => $propietario->id,
                                'fecha_objetivo' => $fechaObjetivo,
                            ],
                            callback: function () use (
                                $registro,
                                $vehiculo,
                                $propietario,
                                $fechaObjetivo
                            ) {
                                $mapeo = Mapeo::with('ubicacion')
                                    ->where('vehiculo_id', $vehiculo->id)
                                    ->first();

                                $datos = [
                                    'propietario' => $propietario,
                                    'vehiculo' => $vehiculo,
                                    'mapeo' => $mapeo,
                                    'seccion' => $mapeo?->ubicacion?->nom
                                        ?? 'No especificada',
                                    'espacio' => $mapeo?->nom
                                        ?? 'No especificado',
                                    'fecha_salida' => $fechaObjetivo,
                                    'hora_salida' => $registro->hora ?? '-',
                                    'observacion' => $registro->observacion ?? '',
                                ];

                                Mail::to($propietario->correo)
                                    ->send(new \App\Mail\AvisoSalidaMensualMail($datos));
                            }
                        );

                        $resultado ? $enviados++ : $omitidos++;
                    } catch (Throwable $e) {
                        $errores++;

                        Log::error('Error enviando aviso de salida mensual', [
                            'ingreso_salida_id' => $registro->id,
                            'error' => $e->getMessage(),
                        ]);
                    }
                }
            });

        return compact('fechaObjetivo', 'enviados', 'omitidos', 'errores');
    }

    public function notificarEspaciosDisponibles(): array
    {
        /*
         * Un espacio solo está libre cuando se cumplen ambas condiciones.
         */
        $cantidad = Mapeo::query()
            ->where('ocupado', 0)
            ->where(function ($q) {
                $q->whereNull('vehiculo_id');
                $q->orWhere('vehiculo_id', 0);
            })
            ->count();

        /*
         * Se guarda el último estado notificado en una fila persistente.
         */
        $estadoAnterior = AgenteNotificacion::where(
            'clave',
            'estado_espacios_disponibles'
        )->first();

        $cantidadAnterior = $estadoAnterior?->datos['cantidad'] ?? null;

        if ($cantidadAnterior !== null && (int) $cantidadAnterior === $cantidad) {
            return [
                'enviados' => 0,
                'espacios_disponibles' => $cantidad,
                'cambio' => false,
            ];
        }

        $estados = config('agente.salida_mensual_status_vigentes', []);

        if (empty($estados)) {
            throw new RuntimeException(
                'Configura los estados vigentes de SALIDA MENSUAL antes de ejecutar el agente.'
            );
        }

        /*
         * Propietarios que tengan al menos un vehículo sin una
         * salida mensual vigente.
         *
         * Requiere la relación Vehiculo::ingresoSalida().
         */
        $vehiculos = Vehiculo::query()
            ->with('propietario')
            ->whereDoesntHave('ingresoSalida', function ($query) use ($estados) {
                $query->where('tipo', 'SALIDA MENSUAL')
                    ->whereIn('status', $estados);
            })
            ->whereHas('propietario', function ($query) {
                $query->whereNotNull('correo')
                    ->where('correo', '!=', '');
            })
            ->get();

        /*
         * Evitar enviar más de un correo al mismo propietario,
         * si tiene varios vehículos elegibles.
         */
        $propietarios = $vehiculos
            ->pluck('propietario')
            ->filter()
            ->unique('id')
            ->values();

        $enviados = 0;
        $errores = 0;

        foreach ($propietarios as $propietario) {
            $clave = sprintf(
                'espacios:%s:%s:%s:%s',
                $cantidadAnterior === null ? 'inicio' : $cantidadAnterior,
                $cantidad,
                $propietario->id,
                now(config('agente.timezone'))->toDateString()
            );

            try {
                $resultado = $this->enviarUnaVez(
                    clave: $clave,
                    tipo: 'ESPACIOS_DISPONIBLES',
                    datos: [
                        'propietario_id' => $propietario->id,
                        'cantidad_anterior' => $cantidadAnterior,
                        'cantidad' => $cantidad,
                    ],
                    callback: function () use ($propietario, $cantidad) {
                        Mail::to($propietario->correo)
                            ->send(new \App\Mail\EspaciosDisponiblesMail([
                                'propietario' => $propietario,
                                'cantidad' => $cantidad,
                            ]));
                    }
                );

                if ($resultado) {
                    $enviados++;
                }
            } catch (Throwable $e) {
                $errores++;

                Log::error('Error enviando aviso de espacios disponibles', [
                    'propietario_id' => $propietario->id,
                    'error' => $e->getMessage(),
                ]);
            }
        }

        /*
         * Actualizar el estado solamente si todos los correos
         * de esta transición se enviaron correctamente.
         */
        if ($errores === 0) {
            AgenteNotificacion::updateOrCreate(
                ['clave' => 'estado_espacios_disponibles'],
                [
                    'tipo' => 'ESTADO_ESPACIOS',
                    'datos' => ['cantidad' => $cantidad],
                    'enviado_at' => now(config('agente.timezone')),
                ]
            );
        }

        return [
            'enviados' => $enviados,
            'errores' => $errores,
            'espacios_disponibles' => $cantidad,
            'cambio' => true,
        ];
    }

    /**
     * Registra el envío y evita procesar dos veces la misma clave.
     */
    private function enviarUnaVez(
        string $clave,
        string $tipo,
        array $datos,
        callable $callback
    ): bool {
        $registro = AgenteNotificacion::firstOrCreate(
            ['clave' => $clave],
            [
                'tipo' => $tipo,
                'datos' => $datos,
            ]
        );

        /*
         * Ya fue enviado correctamente.
         */
        if ($registro->enviado_at !== null) {
            return false;
        }

        try {
            $callback();

            $registro->update([
                'enviado_at' => now(config('agente.timezone')),
            ]);

            return true;
        } catch (Throwable $e) {
            /*
             * Eliminar el intento fallido permite reintentar
             * en la siguiente ejecución.
             */
            $registro->delete();

            throw $e;
        }
    }
}
