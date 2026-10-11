<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogSeguimiento extends Model
{
    protected $fillable = [
        'user_id',
        'accion',
        'descripcion',
        'modulo',
        'fecha',
        'hora',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
