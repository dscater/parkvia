<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgenteNotificacion extends Model
{
    protected $fillable = [
        'clave',
        'tipo',
        'datos',
        'enviado_at',
    ];

    protected function casts(): array
    {
        return [
            'datos' => 'array',
            'enviado_at' => 'datetime',
        ];
    }
}
