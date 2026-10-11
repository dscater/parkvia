<div class="row">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Información:</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('nom',null,['class'=>'form-control','required']) }}
                <label class="form-label">Nombre(s)*</label>
            </div>
        </div> 
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('apep',null,['class'=>'form-control','required']) }}
                <label class="form-label">Apellido paterno*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('apem',null,['class'=>'form-control']) }}
                <label class="form-label">Apellido materno</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::number('ci',null,['class'=>'form-control','required','min'=>'0']) }}
                <label class="form-label">Cédula de identidad*</label>
            </div>
        </div> 
    </div>
    <div class="col-md-2">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::select('ci_exp',[
                    ''=> '',
                    'LP'=> 'LA PAZ',
                    'CB'=> 'COCHABAMBA',
                    'SC'=> 'SANTA CRUZ',
                    'OR'=> 'ORURO',
                    'PT'=> 'POTOSI',
                    'CH'=> 'CHUQUISACA',
                    'TJ'=> 'TARIJA',
                    'BN'=> 'BENI',
                    'PD'=> 'PANDO',
                    ],null,['class'=>'form-control','id'=>'select_ci','required']) }}
                <label class="form-label" for="select_ci">Expedido*</label>
            </div>
        </div>
    </div>
    @if(isset($propietario))
    <div class="col-md-3 contenedor_foto">
        <img src="{{ asset('imgs/propietarios/'.$propietario->foto) }}" width="150" height="155" id="imagen_select">
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
        <img src="{{ asset('imgs/users/user_default.png') }}" width="150" height="155" id="imagen_select">
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

<div class="row">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Dirección:</h4>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('dir',null,['class'=>'form-control']) }}
                <label class="form-label">Dirección</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Contacto:</h4>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::email('correo',null,['class'=>'form-control']) }}
                <label class="form-label">Email</label>
            </div>
        </div> 
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('fono',null,['class'=>'form-control']) }}
                <label class="form-label">Teléfono</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('cel',null,['class'=>'form-control']) }}
                <label class="form-label">Celular</label>
            </div>
        </div>
    </div>
</div>