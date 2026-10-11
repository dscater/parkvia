<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    protected $fillable = [
        'nom',
        'apep',
        'apem',
        'ci',
        'ci_exp',
        'dir',
        'correo',
        'fono',
        'cel',
        'foto'
    ];

    public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo', 'propietario_id', 'id');
    }
}
