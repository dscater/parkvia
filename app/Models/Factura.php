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

    protected $appends = ["url_qr", "qr_b64"];

    public function getUrlQrAttribute()
    {
        return asset("imgs/qr/" . $this->qr);
    }

    public function getQrB64Attribute()
    {
        $path = public_path("imgs/qr/" . $this->qr);
        if (file_exists($path)) {
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            return $base64;
        }
        return "";
    }

    public function cobro()
    {
        return $this->belongsTo('App\Models\Cobro', 'cobro_id', 'id');
    }
}
