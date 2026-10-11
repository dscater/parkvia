<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $fillable = [
        'nom',
        'capacidad',
        'descripcion',
        'status',
    ];

    public function mapeo()
    {
        return $this->hasMany('App\Models\Mapeo', 'ubicacion_id', 'id');
    }
}
