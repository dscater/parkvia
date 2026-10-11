<div class="row">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Información:</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::text('name',isset($request)? $request->name:null,['class'=>'form-control','required']) }}
                <label class="form-label">Nombre de usuario*</label>
            </div>
            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div> 
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::input('password','password',null,['class'=>'form-control','id'=>'password','minlength'=>'6','required']) }}
                <label class="form-label">Contraseña*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{ Form::input('password','password_confirm',null,['class'=>'form-control','id'=>'password_confirm','minlength'=>'6','required']) }}
                <label class="form-label">Confirmar contraseña*</label>
            </div>
        </div>
        @if (isset($error))
        <span class="invalid-feedback" role="alert">
            <strong>Las contraseñas no coinciden.</strong>
        </span>
        @endif
    </div>
</div>