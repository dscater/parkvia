<div class="row">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Información:</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="nom" value="{{ isset($seccion) ? $seccion->nom : '' }}"
                    class="form-control" required>
                <label class="form-label">Nombre*</label>
            </div>
            @if ($errors->has('nom'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('nom') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                @if (isset($seccion))
                    <input type="number" name="capacidad" value="{{ isset($seccion) ? $seccion->capacidad : '' }}"
                        class="form-control" min="1" required readonly>
                @else
                    <input type="number" name="capacidad" value="{{ isset($seccion) ? $seccion->capacidad : '' }}"
                        class="form-control" min="1" required>
                @endif
                <label class="form-label">Capacidad*</label>
            </div>
            @if ($errors->has('capacidad'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('capacidad') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="descripcion" value="{{ isset($seccion) ? $seccion->descripcion : '' }}"
                    class="form-control">
                <label class="form-label">Descripción</label>
            </div>
        </div>
    </div>
</div>
