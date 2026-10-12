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
    protected $appends = ["url_foto", "foto_b64"];

    public function getUrlFotoAttribute()
    {
        return asset("imgs/propietarios/" . $this->foto);
    }

    public function getFotoB64Attribute()
    {
        $path = public_path("imgs/propietarios/" . $this->foto);
        if (file_exists($path)) {
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            return $base64;
        }
        return "";
    }

    public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo', 'propietario_id', 'id');
    }
}
