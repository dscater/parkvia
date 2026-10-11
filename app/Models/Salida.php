<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    protected $fillable = [
        'salida_id',
        'cobrado'
    ];

    public function salida()
    {
        return $this->belongsTo('App\Models\IngresoSalida', 'salida_id', 'id');
    }
}
