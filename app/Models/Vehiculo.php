<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = [
        'placa',
        'marca',
        'modelo',
        'nom',
        'tipo_id',
        'propietario_id',
        'tarifa_id',
        'foto',
        'rfid',
        'fecha_reg',
        'status'
    ];

    protected $appends = ["url_foto", "foto_b64"];

    public function getUrlFotoAttribute()
    {
        return asset("imgs/vehiculos/" . $this->foto);
    }

    public function getFotoB64Attribute()
    {
        $path = public_path("imgs/vehiculos/" . $this->foto);
        if (file_exists($path)) {
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            return $base64;
        }
        return "";
    }

    public function propietario()
    {
        return $this->belongsTo('App\Models\Propietario', 'propietario_id', 'id');
    }

    public function tarifa()
    {
        return $this->belongsTo('App\Models\Tarifa', 'tarifa_id', 'id');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Models\TipoVehiculo', 'tipo_id', 'id');
    }

    public function ingresoSalida()
    {
        return $this->hasMany('App\Models\IngresoSalida', 'vehiculo_id', 'id');
    }

    public function mapeo()
    {
        return $this->hasOne('App\Models\Mapeo', 'vehiculo_id', 'id');
    }
}
