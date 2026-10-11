<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IngresoSalida extends Model
{
    protected $fillable = [
        'vehiculo_id',
        'accion',
        'hora',
        'observacion',
        'fecha_reg',
        'tipo',
        'status'
    ];

    public function vehiculo()
    {
        return $this->belongsTo('App\Models\Vehiculo', 'vehiculo_id', 'id');
    }

    public function cobro()
    {
        return $this->hasOne('App\Models\Cobro', 'salida_id', 'id');
    }

    public function cobro_salida()
    {
        return $this->hasOne('App\Models\Salida', 'salida_id', 'id');
    }
}
