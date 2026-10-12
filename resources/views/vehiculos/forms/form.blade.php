<div class="row">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Información:</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="nom" value="{{ isset($vehiculo) ? $vehiculo->nom : '' }}"
                    class="form-control" required>
                <label class="form-label">Nombre del vehiculo*</label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="placa" value="{{ isset($vehiculo) ? $vehiculo->placa : '' }}"
                    class="form-control">
                <label class="form-label">Placa</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="marca" value="{{ isset($vehiculo) ? $vehiculo->marca : '' }}"
                    class="form-control">
                <label class="form-label">Marca</label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="modelo" value="{{ isset($vehiculo) ? $vehiculo->modelo : '' }}"
                    class="form-control">
                <label class="form-label">Modelo</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <select name="tipo_id" class="form-control" required>
                    @foreach ($array_tipos as $key => $item)
                        <option value="{{ $key }}"
                            {{ isset($vehiculo) && $vehiculo->tipo_id == $key ? 'selected' : '' }}>{{ $item }}
                        </option>
                    @endforeach
                </select>
                <label class="form-label">Tipo*</label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <select name="propietario_id" class="form-control" required>
                    @foreach ($array_propietarios as $key => $item)
                        <option value="{{ $key }}"
                            {{ isset($vehiculo) && $vehiculo->propietario_id == $key ? 'selected' : '' }}>
                            {{ $item }}
                        </option>
                    @endforeach
                </select>
                <label class="form-label">Propietario*</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="rfid" id="rfid"
                    value="{{ isset($vehiculo) ? $vehiculo->rfid : '' }}" class="form-control" required>
                <label class="form-label">RFID*</label>
            </div>
            <div class="help-info">
                Seleccione esta caja de texto y pase la tarjeta RFID.
            </div>
            @if ($errors->has('rfid'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('rfid') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group form-float">
            <div class="form-line">
                <select name="tarifa_id" class="form-control" required>
                    @foreach ($array_tarifas as $key => $item)
                        <option value="{{ $key }}"
                            {{ isset($vehiculo) && $vehiculo->tarifa_id == $key ? 'selected' : '' }}>
                            {{ $item }}
                        </option>
                    @endforeach
                </select>
                <label class="form-label">Tarifa*</label>
            </div>
        </div>
    </div>

    @if (isset($vehiculo))
        <div class="col-md-3 contenedor_foto">
            <img src="{{ asset('imgs/vehiculos/' . $vehiculo->foto) }}" width="150" height="155"
                id="imagen_select">
            <div class="form-group form-float contenedor_subir">
                <div class="form-line">
                    <input type="file" accept="image/*" style='opacity: 0;' name="foto" class="file"
                        id="foto">
                    <label class="subir"for="foto">
                        <i class="fa fa-image"></i> <span>Elegir foto</span>
                    </label>
                </div>
            </div>
        </div>
    @else
        <div class="col-md-3 contenedor_foto">
            <img src="{{ asset('imgs/vehiculos/vehiculo_default.jpg') }}" width="150" height="155"
                id="imagen_select">
            <div class="form-group form-float contenedor_subir">
                <div class="form-line">
                    <input type="file" accept="image/*" style='opacity: 0;' name="foto" class="file"
                        id="foto">
                    <label class="subir"for="foto">
                        <i class="fa fa-image"></i> <span>Elegir foto</span>
                    </label>
                </div>
            </div>
        </div>
    @endif
</div>
