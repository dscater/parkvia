<?php

namespace App\Console\Commands;

use App\Services\AgenteInteligenteService;
use Illuminate\Console\Command;
use Throwable;

class NotificarSalidasMensuales extends Command
{
    protected $signature = 'agente:salidas-mensuales';

    protected $description =
    'Notifica las salidas mensuales programadas para dentro de dos días';

    public function handle(AgenteInteligenteService $agente): int
    {
        try {
            $resultado = $agente->notificarSalidasMensuales();

            $this->info('Resultado del agente:');
            $this->table(
                ['Indicador', 'Cantidad'],
                [
                    ['Fecha objetivo', $resultado['fechaObjetivo']],
                    ['Correos enviados', $resultado['enviados']],
                    ['Registros omitidos', $resultado['omitidos']],
                    ['Errores', $resultado['errores']],
                ]
            );

            return self::SUCCESS;
        } catch (Throwable $e) {
            report($e);
            $this->error($e->getMessage());

            return self::FAILURE;
        }
    }
}
