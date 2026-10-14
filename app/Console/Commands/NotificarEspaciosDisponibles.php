<?php

namespace App\Console\Commands;

use App\Services\AgenteInteligenteService;
use Illuminate\Console\Command;
use Throwable;

class NotificarEspaciosDisponibles extends Command
{
    protected $signature = 'agente:espacios-disponibles';

    protected $description =
    'Notifica cambios en la cantidad de espacios disponibles';

    public function handle(AgenteInteligenteService $agente): int
    {
        try {
            $resultado = $agente->notificarEspaciosDisponibles();

            $this->info(
                'Espacios disponibles: ' .
                    $resultado['espacios_disponibles']
            );

            $this->info(
                'Correos enviados: ' . $resultado['enviados']
            );

            $this->info(
                '¿Cambió la cantidad?: ' .
                    ($resultado['cambio'] ? 'Sí' : 'No')
            );

            if (($resultado['errores'] ?? 0) > 0) {
                $this->warn(
                    'Hubo errores al enviar algunos correos.'
                );
            }

            return self::SUCCESS;
        } catch (Throwable $e) {
            report($e);
            $this->error($e->getMessage());

            return self::FAILURE;
        }
    }
}
