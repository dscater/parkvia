<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('agente:salidas-mensuales')
    ->dailyAt('08:00')
    ->timezone('America/La_Paz')
    ->withoutOverlapping();

Schedule::command('agente:espacios-disponibles')
    ->hourly()
    ->timezone('America/La_Paz')
    ->withoutOverlapping();
