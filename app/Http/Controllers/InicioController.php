<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Carrusel;
use App\Models\Libro;
use App\Models\Prestamo;
use App\Models\SolicitudPrestamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Empresa;

class InicioController extends Controller
{
    public function inicio(Request $request)
    {

        $empresa = Empresa::first();
        return view('auth.login', compact('empresa'));
    }
}
