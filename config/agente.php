<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Estados vigentes
    |--------------------------------------------------------------------------
    |
    | Completar con los valores reales de IngresoSalida.status.
    |
    */
    'salida_mensual_status_vigentes' => array_filter(
        explode(',', env('AGENTE_SALIDA_MENSUAL_STATUS_VIGENTES', '')),
        fn($valor) => $valor !== ''
    ),

    /*
    |--------------------------------------------------------------------------
    | Zona horaria
    |--------------------------------------------------------------------------
    */
    'timezone' => env('AGENTE_TIMEZONE', 'America/La_Paz'),
];
