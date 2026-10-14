<?php

namespace App\Services;

use App\Mail\CobroMail;
use App\Mail\NotificacionCorreo;
use App\Models\Configuracion;
use App\Models\Mapeo;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class EnviarCorreoService
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


    /**
     * Correo ingreso salida
     *
     * @param [type] $ingreso_salida
     * @param [type] $vehiculo_id
     * @param [type] $accion
     * @return void
     */
    public function correoIngresoSalida($ingreso_salida, $vehiculo_id, $accion)
    {
        // ENVIAR CORREO
        // preparar envio correo
        $vehiculo = Vehiculo::find($vehiculo_id);
        $datos = [
            "propietario" => "S/P",
            "vehiculo" => "S/V",
            "fecha" => "-",
            "hora" => "-",
            "accion" => "-"
        ];
        if ($vehiculo) {
            $propietario = $vehiculo->propietario;
            if (!$propietario->correo) {
                return false;
            }
            $mapeo = Mapeo::where("vehiculo_id", $vehiculo->id)->get()->first();
            $datos = [
                'mapeo'       => $mapeo,
                'propietario' => $propietario,
                'vehiculo'    => $vehiculo,
                'fecha'       => $ingreso_salida->updated_at->format('d/m/Y'),
                'hora'        => $ingreso_salida->updated_at->format('H:i:s'),
                'accion'      => $accion,
                'lugar'       => $mapeo?->ubicacion?->nom
                    ?? $mapeo?->nom
                    ?? 'No especificado',
            ];
            // Log::debug("Correo de envío: " . Config::get('mail.from.address'));
            // Log::debug("Contraseña: " . Config::get('mail.mailers.smtp.password'));
            // Log::debug("SMTP Host: " . Config::get('mail.mailers.smtp.host'));
            // Log::debug("SMTP Port: " . Config::get('mail.mailers.smtp.port'));
            // Log::debug("SMTP Encryption: " . Config::get('mail.mailers.smtp.encryption'));
            // Log::debug("Para: " . $propietario->correo);

            Mail::to($propietario->correo)
                ->send(new NotificacionCorreo($datos));
            // EnviaCodigoerificacionJob::dispatch($datos, $user);
            return true;
        }
        return false;
    }

    public function correoCobro($ingreso_salida, $vehiculo_id, $cobro)
    {
        $vehiculo = Vehiculo::with('propietario')->find($vehiculo_id);

        if (!$vehiculo || !$vehiculo->propietario) {
            return false;
        }

        $propietario = $vehiculo->propietario;

        if (!$propietario->correo) {
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

            // Datos del cobro
            'fecha_ingreso' => $cobro->fecha_ingreso ?? '-',
            'hora_ingreso'  => $cobro->hora_ingreso ?? '-',
            'fecha_salida'  => $cobro->salida->fecha_reg ?? '-',
            'hora_salida'   => $cobro->salida->hora ?? '-',

            'tiempo_cobrado' => $cobro->tiempo_cobrado ?? 0,
            'total'          => $cobro->total ?? 0,

            'a_nombre' => $cobro->a_nombre ?? '',
            'nit'      => $cobro->nit ?? '',
        ];

        Mail::to($propietario->correo)
            ->send(new CobroMail($datos));

        return true;
    }
}
