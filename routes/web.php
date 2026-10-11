<?php

use App\Http\Controllers\CobroController;
use App\Http\Controllers\DatosUsuarioController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IngresoSalidaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NotificacionUsuarioController;
use App\Http\Controllers\PendienteController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\TarifaController;
use App\Http\Controllers\TipoVehiculoController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\UserPermisoController;
use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('optimize');
    return 'Proceso realizado';
});

Route::get('/', [InicioController::class, 'inicio'])->name('inicio');

Route::middleware(['auth'])->group(function () {
    // HOME
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home/notificaciones', [HomeController::class, 'notificaciones'])->name('home.notificaciones');

    // EMPRESA
    Route::get('/empresa', [EmpresaController::class, 'index'])->name('empresa.index')
        ->middleware('permiso:empresa.index');
    Route::get('/empresa/edit/{empresa}', [EmpresaController::class, 'edit'])->name('empresa.edit')
        ->middleware('permiso:empresa.edit');
    Route::put('/empresa/update/{empresa}', [EmpresaController::class, 'update'])->name('empresa.update')
        ->middleware('permiso:empresa.edit');

    // USUARIOS
    Route::get('users', [DatosUsuarioController::class, 'index'])->name('users.index')
        ->middleware('permiso:users.index');

    Route::get('users/create', [DatosUsuarioController::class, 'create'])->name('users.create')
        ->middleware('permiso:users.create');

    Route::get('users/show/{datosUsuario}', [DatosUsuarioController::class, 'show'])->name('users.show');

    Route::get('users/edit/{datosUsuario}', [DatosUsuarioController::class, 'edit'])->name('users.edit')
        ->middleware('permiso:users.edit');

    Route::post('users/store', [DatosUsuarioController::class, 'store'])->name('users.store')
        ->middleware('permiso:users.create');

    Route::put('users/update/{datosUsuario}', [DatosUsuarioController::class, 'update'])->name('users.update')
        ->middleware('permiso:users.edit');

    Route::delete('users/destroy/{user}', [DatosUsuarioController::class, 'destroy'])->name('users.destroy')
        ->middleware('permiso:users.destroy');

    // PERMISOS
    Route::get('users/permisos/{user}', [UserPermisoController::class, 'index'])->name('user_permisos.index')
        ->middleware('permiso:user_permisos.index');

    Route::post('users/permisos/{user}', [UserPermisoController::class, 'store'])->name('user_permisos.store')
        ->middleware('permiso:user_permisos.edit');

    Route::delete('users/permisos/{user_permiso}', [UserPermisoController::class, 'destroy'])->name('user_permisos.destroy')
        ->middleware('permiso:user_permisos.edit');

    Route::post('users/permisos_usuarios_faltantes', [UserPermisoController::class, 'permisos_usuarios_faltantes'])->name('user_permisos.permisos_usuarios_faltantes')
        ->middleware('permiso:user_permisos.edit');

    // Configuración de cuenta
    // contraseña
    Route::GET('users/configurar/cuenta/{user}', [DatosUsuarioController::class, 'config_cuenta'])->name('users.config');
    Route::PUT('users/configurar/cuenta/update/{user}', [DatosUsuarioController::class, 'cuenta_update'])->name('users.config_update');
    // foto de perfil
    Route::POST('users/configurar/cuenta/update/foto/{user}', [DatosUsuarioController::class, 'cuenta_update_foto'])->name('users.config_update_foto');

    // CONTROLES
    Route::get('controles', [UserController::class, 'index'])->name('controles.index');

    Route::get('controles/control_create', [UserController::class, 'control_create'])->name('controles.control_create');

    Route::get('controles/edit/{user}', [UserController::class, 'edit'])->name('controles.edit');

    Route::post('controles/control_store', [UserController::class, 'control_store'])->name('controles.control_store');

    Route::put('controles/control_update/{user}', [UserController::class, 'control_update'])->name('controles.control_update');

    // TARIFAS
    Route::get('tarifas', [TarifaController::class, 'index'])->name('tarifas.index')
        ->middleware('permiso:tarifas.index');

    Route::get('tarifas/create', [TarifaController::class, 'create'])->name('tarifas.create')
        ->middleware('permiso:tarifas.create');

    Route::get('tarifas/show/{tarifa}', [TarifaController::class, 'show'])->name('tarifas.show');

    Route::get('tarifas/edit/{tarifa}', [TarifaController::class, 'edit'])->name('tarifas.edit')
        ->middleware('permiso:tarifas.edit');

    Route::post('tarifas/store', [TarifaController::class, 'store'])->name('tarifas.store')
        ->middleware('permiso:tarifas.create');

    Route::put('tarifas/update/{tarifa}', [TarifaController::class, 'update'])->name('tarifas.update')
        ->middleware('permiso:tarifas.edit');

    Route::delete('tarifas/destroy/{tarifa}', [TarifaController::class, 'destroy'])->name('tarifas.destroy')
        ->middleware('permiso:tarifas.destroy');

    Route::get('tarifas/cargaTarifas', [TarifaController::class, 'cargaTarifas'])->name('tarifas.cargaTarifas');

    // PROPIETARIOS
    Route::get('propietarios', [PropietarioController::class, 'index'])->name('propietarios.index')
        ->middleware('permiso:propietarios.index');

    Route::get('propietarios/create', [PropietarioController::class, 'create'])->name('propietarios.create')
        ->middleware('permiso:propietarios.create');

    Route::get('propietarios/show/{propietario}', [PropietarioController::class, 'show'])->name('propietarios.show');

    Route::get('propietarios/edit/{propietario}', [PropietarioController::class, 'edit'])->name('propietarios.edit')
        ->middleware('permiso:propietarios.edit');

    Route::post('propietarios/store', [PropietarioController::class, 'store'])->name('propietarios.store')
        ->middleware('permiso:propietarios.create');

    Route::put('propietarios/update/{propietario}', [PropietarioController::class, 'update'])->name('propietarios.update')
        ->middleware('permiso:propietarios.edit');

    Route::delete('propietarios/destroy/{propietario}', [PropietarioController::class, 'destroy'])->name('propietarios.destroy')
        ->middleware('permiso:propietarios.destroy');

    Route::get('propietarios/cargaPropietarios', [PropietarioController::class, 'cargaPropietarios'])->name('propietarios.cargaPropietarios');

    // VEHICULOS
    Route::get('vehiculos', [VehiculoController::class, 'index'])->name('vehiculos.index')
        ->middleware('permiso:vehiculos.index');

    Route::get('vehiculos/create', [VehiculoController::class, 'create'])->name('vehiculos.create')
        ->middleware('permiso:vehiculos.create');

    Route::get('vehiculos/show/{vehiculo}', [VehiculoController::class, 'show'])->name('vehiculos.show');

    Route::get('vehiculos/edit/{vehiculo}', [VehiculoController::class, 'edit'])->name('vehiculos.edit')
        ->middleware('permiso:vehiculos.edit');

    Route::post('vehiculos/store', [VehiculoController::class, 'store'])->name('vehiculos.store')
        ->middleware('permiso:vehiculos.create');

    Route::put('vehiculos/update/{vehiculo}', [VehiculoController::class, 'update'])->name('vehiculos.update')
        ->middleware('permiso:vehiculos.edit');

    Route::delete('vehiculos/destroy/{vehiculo}', [VehiculoController::class, 'destroy'])->name('vehiculos.destroy')
        ->middleware('permiso:vehiculos.destroy');

    Route::get('vehiculos/kardex/{vehiculo}', [VehiculoController::class, 'kardex'])->name('vehiculos.kardex');

    Route::post('vehiculos/store_ingreso', [VehiculoController::class, 'store_ingreso'])->name('vehiculos.store_ingreso');

    // PENDIENTES
    Route::get('pendiente', [PendienteController::class, 'obtienePendiente'])->name('pendiente.obtienePendiente');
    Route::post('pendiente/store', [PendienteController::class, 'store'])->name('pendiente.store');
    Route::get('pendiente/compruebaRegistro', [PendienteController::class, 'compruebaRegistro'])->name('pendiente.compruebaRegistro');

    // UBICACIONES/SECCIONES
    Route::get('secciones', [UbicacionController::class, 'index'])->name('secciones.index')
        ->middleware('permiso:secciones.index');

    Route::get('secciones/create', [UbicacionController::class, 'create'])->name('secciones.create')
        ->middleware('permiso:secciones.create');

    Route::get('secciones/show/{seccion}', [UbicacionController::class, 'show'])->name('secciones.show');

    Route::get('secciones/edit/{seccion}', [UbicacionController::class, 'edit'])->name('secciones.edit')
        ->middleware('permiso:secciones.edit');

    Route::post('secciones/store', [UbicacionController::class, 'store'])->name('secciones.store')
        ->middleware('permiso:secciones.create');

    Route::put('secciones/update/{seccion}', [UbicacionController::class, 'update'])->name('secciones.update')
        ->middleware('permiso:secciones.edit');

    Route::delete('secciones/destroy/{seccion}', [UbicacionController::class, 'destroy'])->name('secciones.destroy')
        ->middleware('permiso:secciones.destroy');

    Route::get('secciones/obtener_seccion', [UbicacionController::class, 'obtener_seccion'])->name('secciones.obtener_seccion');

    // MAPEO
    Route::get('secciones/mapeo/{seccion}', [MapeoController::class, 'index'])->name('mapeos.index');

    Route::get('secciones/mapeo/show/{seccion}', [MapeoController::class, 'show'])->name('mapeos.show');

    Route::post('secciones/mapeo_acciones', [MapeoController::class, 'acciones'])->name('mapeos.acciones');

    Route::get('secciones/obtener_mapeo', [MapeoController::class, 'obtener_mapeo'])->name('mapeos.obtener_mapeo');

    Route::get('secciones/obtieneUbicacionVehiculo', [MapeoController::class, 'obtieneUbicacionVehiculo'])->name('mapeos.obtieneUbicacionVehiculo');

    // TIPOS DE VEHICULOS
    Route::get('tipos', [TipoVehiculoController::class, 'index'])->name('tipos.index')
        ->middleware('permiso:tipos.index');

    Route::get('tipos/create', [TipoVehiculoController::class, 'create'])->name('tipos.create')
        ->middleware('permiso:tipos.create');

    Route::get('tipos/show/{tipo}', [TipoVehiculoController::class, 'show'])->name('tipos.show');

    Route::get('tipos/edit/{tipo}', [TipoVehiculoController::class, 'edit'])->name('tipos.edit')
        ->middleware('permiso:tipos.edit');

    Route::post('tipos/store', [TipoVehiculoController::class, 'store'])->name('tipos.store')
        ->middleware('permiso:tipos.create');

    Route::put('tipos/update/{tipo}', [TipoVehiculoController::class, 'update'])->name('tipos.update')
        ->middleware('permiso:tipos.edit');

    Route::delete('tipos/destroy/{tipo}', [TipoVehiculoController::class, 'destroy'])->name('tipos.destroy')
        ->middleware('permiso:tipos.destroy');


    Route::get('tipos/cargaTipos', [TipoVehiculoController::class, 'cargaTipos'])->name('tipos.cargaTipos');

    // INGRESOS Y SALIDAS
    Route::get('ingresos_salidas', [IngresoSalidaController::class, 'index'])->name('ingresos_salidas.index')
        ->middleware('permiso:ingresos_salidas.index');

    Route::get('ingresos_salidas/create', [IngresoSalidaController::class, 'create'])->name('ingresos_salidas.create')
        ->middleware('permiso:ingresos_salidas.create');

    Route::get('ingresos_salidas/show/{ingreso_salida}', [IngresoSalidaController::class, 'show'])->name('ingresos_salidas.show');

    Route::get('ingresos_salidas/edit/{ingreso_salida}', [IngresoSalidaController::class, 'edit'])->name('ingresos_salidas.edit')
        ->middleware('permiso:ingresos_salidas.edit');

    Route::post('ingresos_salidas/store', [IngresoSalidaController::class, 'store'])->name('ingresos_salidas.store')
        ->middleware('permiso:ingresos_salidas.create');

    Route::put('ingresos_salidas/update/{ingreso_salida}', [IngresoSalidaController::class, 'update'])->name('ingresos_salidas.update')
        ->middleware('permiso:ingresos_salidas.edit');

    Route::delete('ingresos_salidas/destroy/{ingreso_salida}', [IngresoSalidaController::class, 'destroy'])->name('ingresos_salidas.destroy')
        ->middleware('permiso:ingresos_salidas.destroy');

    Route::get('ingresos_salidas/carga_accion', [IngresoSalidaController::class, 'carga_accion'])->name('ingresos_salidas.carga_accion');

    // COBROS
    Route::get('cobros', [CobroController::class, 'index'])->name('cobros.index')
        ->middleware('permiso:cobros.index');

    Route::get('cobros/create', [CobroController::class, 'create'])->name('cobros.create')
        ->middleware('permiso:cobros.create');

    Route::get('cobros/show/{cobro}', [CobroController::class, 'show'])->name('cobros.show');

    Route::get('cobros/edit/{cobro}', [CobroController::class, 'edit'])->name('cobros.edit')
        ->middleware('permiso:cobros.edit');

    Route::post('cobros/store', [CobroController::class, 'store'])->name('cobros.store')
        ->middleware('permiso:cobros.create');

    Route::put('cobros/update/{cobro}', [CobroController::class, 'update'])->name('cobros.update')
        ->middleware('permiso:cobros.edit');

    Route::delete('cobros/destroy/{cobro}', [CobroController::class, 'destroy'])->name('cobros.destroy')
        ->middleware('permiso:cobros.destroy');

    Route::get('cobros/obtener_tarifa', [CobroController::class, 'obtener_tarifa'])->name('cobros.obtener_tarifa');

    Route::get('cobros/factura/{cobro}', [CobroController::class, 'factura'])->name('cobros.factura');

    Route::get('cobros/control', [CobroController::class, 'control'])->name('cobros.control');

    Route::GET('cobros/realizar_cobro', [CobroController::class, 'realizar_cobro'])->name('cobros.realizar_cobro');

    // NOTIFICACIONES
    Route::get('notificaciones', [NotificacionUsuarioController::class, 'index'])->name('notificaciones.index');

    Route::get('notificaciones/create', [NotificacionUsuarioController::class, 'create'])->name('notificaciones.create');

    Route::get('notificaciones/show/{tipo}', [NotificacionUsuarioController::class, 'show'])->name('notificaciones.show');

    Route::get('notificaciones/edit/{tipo}', [NotificacionUsuarioController::class, 'edit'])->name('notificaciones.edit');

    Route::post('notificaciones/store', [NotificacionUsuarioController::class, 'store'])->name('notificaciones.store');

    Route::get('notificaciones/update', [NotificacionUsuarioController::class, 'update'])->name('notificaciones.update');

    Route::delete('notificaciones/destroy/{tipo}', [NotificacionUsuarioController::class, 'destroy'])->name('notificaciones.destroy');

    // REPORTES
    Route::get('reportes', [ReporteController::class, 'index'])->name('reportes.index')
        ->middleware('permiso:reportes.index');
    Route::get('reportes/usuarios', [ReporteController::class, 'usuarios'])->name('reportes.usuarios');
    Route::get('reportes/vehiculos', [ReporteController::class, 'vehiculos'])->name('reportes.vehiculos');
    Route::get('reportes/ingresos', [ReporteController::class, 'ingresos'])->name('reportes.ingresos');
    Route::get('reportes/salidas', [ReporteController::class, 'salidas'])->name('reportes.salidas');
    Route::get('reportes/tarifas', [ReporteController::class, 'tarifas'])->name('reportes.tarifas');
    Route::get('reportes/cobros', [ReporteController::class, 'cobros'])->name('reportes.cobros');
    Route::get('reportes/ubicaciones', [ReporteController::class, 'ubicaciones'])->name('reportes.ubicaciones');
    Route::get('reportes/ingresos_salidas', [ReporteController::class, 'ingresos_salidas'])->name('reportes.ingresos_salidas');

    Route::get('reportes/ingresos_salidas_vehiculos', [ReporteController::class, 'ingresos_salidas_vehiculos'])->name('reportes.ingresos_salidas_vehiculos');


    Route::get('reportes/logs', [ReporteController::class, 'logs'])->name('reportes.logs');

    Route::get('reportes/cobros_grafico', [ReporteController::class, 'cobros_grafico'])->name('reportes.cobros_grafico');
    Route::get('reportes/ubicaciones_grafico', [ReporteController::class, 'ubicaciones_grafico'])->name('reportes.ubicaciones_grafico');
    Route::get('reportes/cargaCobros', [ReporteController::class, 'cargaCobros'])->name('reportes.cargaCobros');
    Route::get('reportes/cargaUbicaciones', [ReporteController::class, 'cargaUbicaciones'])->name('reportes.cargaUbicaciones');
});

Auth::routes();
