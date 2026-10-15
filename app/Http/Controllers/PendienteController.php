<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pendiente;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\DB;

class PendienteController extends Controller
{
    public function obtienePendiente()
    {
        $pendiente = Pendiente::where('registrado', 'NO')->get()->first();
        if ($pendiente) {
            return response()->JSON([
                'msg' => 'SI',
                'rfid' => $pendiente->rfid
            ]);
        } else {
            return response()->JSON([
                'msg' => 'NO',
                'rfid' => ''
            ]);
        }
    }

    public function store(Request $request)
    {
        $existe = Pendiente::where("rfid", $request->rfid)
            ->where("registrado", "NO")
            ->get()->first();
        if (!$existe) {
            Pendiente::create([
                'rfid' => $request->rfid,
                'registrado' => 'NO'
            ]);
        }

        return response()->JSON(true);
    }

    public function compruebaRegistro(Request $request)
    {
        $_rfid = $request->rfid;
        $vehiculo = Vehiculo::where('rfid', $_rfid)->get()->first();
        if ($vehiculo) {
            DB::update("UPDATE pendientes SET registrado = 'SI' where rfid = '" . $vehiculo->rfid . "'");
            return response()->JSON(true);
        }
        return response()->JSON(false);
    }
}
