<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model
{
    protected $fillable = [
        'nom',
        'descripcion',
    ];

    public function vehiculo()
    {
        return $this->hasMany('App\Models\Vehiculo', 'tipo_id', 'id');
    }
}
