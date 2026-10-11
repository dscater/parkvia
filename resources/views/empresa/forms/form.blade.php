<div class="row">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Información:</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('cod',null,['class'=>'form-control','required']) }}
                <label class="form-label">Código(s)*</label>
            </div>
        </div> 
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('nit',null,['class'=>'form-control','required']) }}
                <label class="form-label">NIT*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('nro_aut',null,['class'=>'form-control']) }}
                <label class="form-label">Nro. de autorización</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('nro_emp',null,['class'=>'form-control','required']) }}
                <label class="form-label">Nro. de empleador*</label>
            </div>
        </div> 
    </div>
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('name',null,['class'=>'form-control','required']) }}
                <label class="form-label">Nombre de la empresa*</label>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('alias',null,['class'=>'form-control']) }}
                <label class="form-label">Alias*</label>
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
                {{ Form::text('pais',null,['class'=>'form-control','required']) }}
                <label class="form-label">País*</label>
            </div>
        </div> 
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('dpto',null,['class'=>'form-control','required']) }}
                <label class="form-label">Departamento*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('Ciudad',null,['class'=>'form-control']) }}
                <label class="form-label">Ciudad*</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('zona',null,['class'=>'form-control','required']) }}
                <label class="form-label">Zona/Barrio*</label>
            </div>
        </div> 
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('calle',null,['class'=>'form-control','required']) }}
                <label class="form-label">Calle/Avenida*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('nro',null,['class'=>'form-control']) }}
                <label class="form-label">Nro.*</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('email',null,['class'=>'form-control']) }}
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


<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('fax',null,['class'=>'form-control']) }}
                <label class="form-label">Fax</label>
            </div>
        </div> 
    </div>
    <div class="col-md-8">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('web',null,['class'=>'form-control']) }}
                <label class="form-label">Web</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('actividad_eco',null,['class'=>'form-control']) }}
                <label class="form-label">Actividad económica</label>
            </div>
        </div> 
    </div>
</div>

<div class="row">
    <div class="col-md-4 contenedor_foto">
        <img src="{{ asset('imgs/empresa/'.$empresa->logo) }}" width="220" height="155" id="imagen_select">
        <div class="form-group form-float contenedor_subir">
            <div class="form-line">
                <input type="file" accept="image/*" style='opacity: 0;' name="logo" class="file" id="foto">
                <label class="subir"for="foto">
                    <i class="fa fa-image"></i> <span>Elegir logo*</span>
                </label>
            </div>
        </div>
    </div>
</div>