<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mapeo extends Model
{
    protected $fillable = [
        'nom',
        'ubicacion_id',
        'ocupado',
        'vehiculo_id'
    ];

    public function ubicacion()
    {
        return $this->belongsTo('App\Models\Ubicacion', 'ubicacion_id', 'id');
    }

    public function vehiculo()
    {
        return $this->belongsTo('App\Models\Vehiculo', 'vehiculo_id', 'id');
    }
}
