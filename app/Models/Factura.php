<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $fillable = [
        'cobro_id',
        'a_nombre',
        'nit',
        'nro_factura',
        'codigo_control',
        'qr',
        'total',
        'fecha',
        'hora',
        'fecha_emision',
        'estado',
        'observacion'
    ];

    public function cobro()
    {
        return $this->belongsTo('App\Models\Cobro', 'cobro_id', 'id');
    }
}
