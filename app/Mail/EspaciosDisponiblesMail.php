<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EspaciosDisponiblesMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $datos) {}

    public function build()
    {
        return $this->subject(
            'Información de espacios disponibles en el parqueo'
        )->view('mail.espacios_disponibles');
    }
}
