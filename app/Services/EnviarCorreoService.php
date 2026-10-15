<?php

namespace App\Services;

use App\Models\Vehiculo;
use App\Models\Mapeo;
use App\Mail\NotificacionCorreo;
use App\Mail\CobroMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;
use Throwable;

class EnviarCorreoService
{
    /**
     * Poner en cola el correo de ingreso o salida.
     */
    public function correoIngresoSalida(
        $ingreso_salida,
        $vehiculo_id,
        $accion
    ): bool {
        $vehiculo = Vehiculo::with('propietario')
            ->find($vehiculo_id);

        if (!$vehiculo || !$vehiculo->propietario) {
            return false;
        }

        $propietario = $vehiculo->propietario;

        if (empty($propietario->correo)) {
            return false;
        }

        $mapeo = Mapeo::with('ubicacion')
            ->where('vehiculo_id', $vehiculo->id)
            ->first();

        $datos = [
            'mapeo'       => $mapeo,
            'propietario' => $propietario,
            'vehiculo'    => $vehiculo,
            'fecha'       => $ingreso_salida->updated_at
                ? $ingreso_salida->updated_at->format('d/m/Y')
                : '-',
            'hora'        => $ingreso_salida->updated_at
                ? $ingreso_salida->updated_at->format('H:i:s')
                : '-',
            'accion'      => $accion,
            'lugar'       => $mapeo?->ubicacion?->nom
                ?? $mapeo?->nom
                ?? 'No especificado',
        ];

        try {
            Mail::to($propietario->correo)
                ->queue(new NotificacionCorreo($datos));

            // true significa que se puso en cola,
            // no que el correo ya llegó al destinatario.
            return true;
        } catch (Throwable $e) {
            Log::error('Error al poner correo de ingreso/salida en cola', [
                'vehiculo_id' => $vehiculo->id,
                'correo'      => $propietario->correo,
                'error'       => $e->getMessage(),
            ]);

            return false;
        }
    }

    /**
     * Poner en cola el correo del cobro.
     */
    public function correoCobro(
        $ingreso_salida,
        $vehiculo_id,
        $cobro
    ): bool {
        $vehiculo = Vehiculo::with('propietario')
            ->find($vehiculo_id);

        if (!$vehiculo || !$vehiculo->propietario) {
            return false;
        }

        $propietario = $vehiculo->propietario;

        if (empty($propietario->correo)) {
            return false;
        }

        $mapeo = Mapeo::with('ubicacion')
            ->where('vehiculo_id', $vehiculo->id)
            ->first();

        $datos = [
            'propietario' => $propietario,
            'vehiculo'    => $vehiculo,
            'mapeo'       => $mapeo,

            'seccion' => $mapeo?->ubicacion?->nom
                ?? 'No especificada',

            'espacio' => $mapeo?->nom
                ?? 'No especificado',

            'fecha_ingreso' => $cobro->fecha_ingreso ?? '-',
            'hora_ingreso'  => $cobro->hora_ingreso ?? '-',
            'fecha_salida'  => $cobro->salida?->fecha_reg ?? '-',
            'hora_salida'   => $cobro->salida?->hora ?? '-',

            'tiempo_cobrado' => $cobro->tiempo_cobrado ?? 0,
            'total'          => $cobro->total ?? 0,

            'a_nombre' => $cobro->a_nombre ?? '',
            'nit'      => $cobro->nit ?? '',
        ];

        try {
            Mail::to($propietario->correo)
                ->queue(new CobroMail($datos));

            return true;
        } catch (Throwable $e) {
            Log::error('Error al poner correo de cobro en cola', [
                'vehiculo_id' => $vehiculo->id,
                'correo'      => $propietario->correo,
                'error'       => $e->getMessage(),
            ]);

            return false;
        }
    }
}
