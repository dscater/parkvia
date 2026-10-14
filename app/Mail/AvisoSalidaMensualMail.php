<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AvisoSalidaMensualMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $datos) {}

    public function build()
    {
        return $this->subject(
            'Recordatorio de salida mensual - ' .
                $this->datos['vehiculo']->placa
        )->view('mail.aviso_salida_mensual');
    }
}
