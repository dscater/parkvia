<div class="row">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Información:</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('nom',null,['class'=>'form-control','required']) }}
                <label class="form-label">Nombre del vehiculo*</label>
            </div>
        </div> 
    </div>
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('placa',null,['class'=>'form-control']) }}
                <label class="form-label">Placa</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('marca',null,['class'=>'form-control']) }}
                <label class="form-label">Marca</label>
            </div>
        </div> 
    </div>
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('modelo',null,['class'=>'form-control']) }}
                <label class="form-label">Modelo</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::select('tipo_id',$array_tipos,null,['class'=>'form-control','required']) }}
                <label class="form-label">Tipo*</label>
            </div>
        </div> 
    </div>
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::select('propietario_id',$array_propietarios,null,['class'=>'form-control','required']) }}
                <label class="form-label">Propietario*</label>
            </div>
        </div> 
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('rfid',null,['class'=>'form-control','required','id'=>'rfid']) }}
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
                {{ Form::select('tarifa_id',$array_tarifas,null,['class'=>'form-control','required']) }}
                <label class="form-label">Tarifa*</label>
            </div>
        </div>
    </div>

    @if(isset($vehiculo))
    <div class="col-md-3 contenedor_foto">
        <img src="{{ asset('imgs/vehiculos/'.$vehiculo->foto) }}" width="150" height="155" id="imagen_select">
        <div class="form-group form-float contenedor_subir">
            <div class="form-line">
                <input type="file" accept="image/*" style='opacity: 0;' name="foto" class="file" id="foto">
                <label class="subir"for="foto">
                    <i class="fa fa-image"></i> <span>Elegir foto</span>
                </label>
            </div>
        </div>
    </div>
    @else
    <div class="col-md-3 contenedor_foto">
        <img src="{{ asset('imgs/vehiculos/vehiculo_default.jpg') }}" width="150" height="155" id="imagen_select">
        <div class="form-group form-float contenedor_subir">
            <div class="form-line">
                <input type="file" accept="image/*" style='opacity: 0;' name="foto" class="file" id="foto">
                <label class="subir"for="foto">
                    <i class="fa fa-image"></i> <span>Elegir foto</span>
                </label>
            </div>
        </div>
    </div>
    @endif
</div>