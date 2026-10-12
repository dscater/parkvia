<div class="row">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Información:</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="rfid" id="is_rfid"
                    value="{{ isset($ingreso_salida) ? $ingreso_salida->rfid : '' }}" class="form-control" required>
                <label class="form-label">RFID*</label>
                <div class="help-info">Ponga el código rfid</div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" id="vehiculo_id" name="vehiculo_id" readonly hidden>
                <input type="text" name="nom_vehiculo" id="nom_vehiculo" value="" class="form-control" disabled
                    required>
                <label class="form-label">Vehículo*</label>
                <div class="help-info">Nombre del vehículo | Nombre del propietario</div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="accion" id="accion"
                    value="{{ isset($ingreso_salida) ? $ingreso_salida->accion : '' }}" class="form-control" required
                    readonly>
                <label class="form-label">Acción*</label>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="observacion"
                    value="{{ isset($ingreso_salida) ? $ingreso_salida->observacion : '' }}" class="form-control">
                <label class="form-label">Observación</label>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="fecha_reg" value="{{ isset($ingreso_salida) ? null : date('Y-m-d') }}" id="fecha_reg"
    required>

<input type="hidden" name="hora" value="{{ isset($ingreso_salida) ? null : date('H:i') }}" id="hora" required>

{{-- DATOS PARA REGISTRAR UBICACION --}}
<div class="row seccion oculto">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Elegir ubicación:</h4>
    </div>
</div>

<div class="row seccion oculto">
    <div class="col-md-12">
        <div class="form-group form-float">
            <div class="form-line">
                <select name="seccion" id="seccion" class="form-control" required>
                    @foreach ($array_secciones as $key => $item)
                        <option value="{{ $key }}"
                            {{ isset($ingreso_salida) && $id_seccion == $key ? 'selected' : '' }}>{{ $item }}
                        </option>
                    @endforeach
                </select>
                <label class="form-label">Sección</label>
            </div>
        </div>
    </div>
    <div class="col-md-12 inst">
        <p class="instruccion"><span class="fondo_verde cuadrado"></span> <span>Disponible</span></p>
        <p class="instruccion"><span class="fondo_rojo cuadrado"></span> <span>Ocupado</span></p>
    </div>
</div>

<div class="row seccion oculto">
    <div class="col-md-12">
        <div class="contenedor" id="contenedor">

        </div>
    </div>
</div>
<div class="form-group form-float seccion oculto">
    @if (isset($ingreso_salida))
        <input type="text" id="mapeo_id" value="{{ $ingreso_salida->vehiculo->mapeo->id }}"
            class="form-control input_mapeo" name="mapeo_id" readonly required="false" hidden>
    @else
        <input type="text" id="mapeo_id" class="form-control input_mapeo" name="mapeo_id" readonly required="false"
            hidden>
    @endif
</div>
{{-- DATOS PARA COBRAR --}}
<div class="row cobrar oculto">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Cobrar:</h4>
    </div>
</div>

<div class="row cobrar oculto">
    <div class="col-md-12">
        <input type="text" id="txtTotal" name="txtTotal" readonly hidden>
        <input type="text" id="txtTiempo" name="txtTiempo" readonly hidden>
        <input type="text" id="txtHoraIngreso" name="txtHoraIngreso" readonly hidden>
        <input type="text" id="txtFechaIngreso" name="txtFechaIngreso" readonly hidden>
        <table class="tarifa" border="1">
            <tbody>
                <tr>
                    <td class="izquierda bold fondo_rojo" width="25%">FECHA Y HORA DE INGRESO:</td>
                    <td class="izquierda fondo_blanco">
                        <span id="h_ingreso">

                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="izquierda bold fondo_rojo" width="25%">FECHA Y HORA DE SALIDA:</td>
                    <td class="izquierda fondo_blanco">
                        <span id="h_salida">

                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="izquierda bold fondo_rojo" width="25%">TARIFA:</td>
                    <td class="izquierda fondo_blanco">
                        <span id="is_tarifa">

                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="izquierda bold fondo_rojo" width="25%">TIEMPO (Hrs.):</td>
                    <td class="izquierda fondo_blanco">
                        <span id="tiempo">

                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="izquierda bold fondo_rojo" width="25%">TOTAL Bs.:</td>
                    <td class="izquierda fondo_blanco">
                        <span id="span_total">

                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="izquierda bold fondo_rojo" width="25%">A NOMBRE DE:</td>
                    <td class="izquierda fondo_blanco input">
                        <input type="text" name="a_nombre" id="txt_a_nombre" placeholder="A NOMBRE DE"
                            value="" required>
                    </td>
                </tr>
                <tr>
                    <td class="izquierda bold fondo_rojo" width="25%">NIT/C.I.:</td>
                    <td class="izquierda fondo_blanco input">
                        <input type="text" name="nit" id="txt_nit" placeholder="NIT/C.I." value=""
                            required>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
