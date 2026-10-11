<div class="row">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Información:</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('nom',null,['class'=>'form-control','required']) }}
                <label class="form-label">Nombre*</label>
            </div>
            @if ($errors->has('nom'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('nom') }}</strong>
            </span>
            @endif
        </div> 
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::number('horas',null,['class'=>'form-control','required']) }}
                <label class="form-label">Horas*</label>
            </div>
        </div> 
    </div>
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::number('precio',null,['class'=>'form-control','required']) }}
                <label class="form-label">Precio (Bs.)*</label>
            </div>
        </div> 
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('descripcion',null,['class'=>'form-control']) }}
                <label class="form-label">Descripción</label>
            </div>
        </div>
    </div>
</div>