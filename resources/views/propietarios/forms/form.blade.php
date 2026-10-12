<div class="row">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Información:</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="nom" value="{{ isset($propietario) ? $propietario->nom : '' }}"
                    class="form-control" required>
                <label class="form-label">Nombre(s)*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="apep" value="{{ isset($propietario) ? $propietario->apep : '' }}"
                    class="form-control" required>
                <label class="form-label">Apellido paterno*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="apem" value="{{ isset($propietario) ? $propietario->apem : '' }}"
                    class="form-control">
                <label class="form-label">Apellido materno</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="number" name="ci" value="{{ isset($propietario) ? $propietario->ci : '' }}"
                    min="0" class="form-control" required>
                <label class="form-label">Cédula de identidad*</label>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group form-float">
            <div class="form-line">
                <select name="ci_exp" id="select_ci" class="form-control" required>
                    <option value=""></option>
                    <option value="LP" {{ isset($propietario) && $propietario->ci_exp == 'LP' ? 'selected' : '' }}>
                        LA PAZ
                    </option>
                    <option value="CB" {{ isset($propietario) && $propietario->ci_exp == 'CB' ? 'selected' : '' }}>
                        COCHABAMBA</option>
                    <option value="SC" {{ isset($propietario) && $propietario->ci_exp == 'SC' ? 'selected' : '' }}>
                        SANTA
                        CRUZ</option>
                    <option value="OR" {{ isset($propietario) && $propietario->ci_exp == 'OR' ? 'selected' : '' }}>
                        ORURO
                    </option>
                    <option value="PT" {{ isset($propietario) && $propietario->ci_exp == 'PT' ? 'selected' : '' }}>
                        POTOSI
                    </option>
                    <option value="CH" {{ isset($propietario) && $propietario->ci_exp == 'CH' ? 'selected' : '' }}>
                        CHUQUISACA</option>
                    <option value="TJ" {{ isset($propietario) && $propietario->ci_exp == 'TJ' ? 'selected' : '' }}>
                        TARIJA</option>
                    <option value="BN" {{ isset($propietario) && $propietario->ci_exp == 'BN' ? 'selected' : '' }}>
                        BENI
                    </option>
                    <option value="PD" {{ isset($propietario) && $propietario->ci_exp == 'PD' ? 'selected' : '' }}>
                        PANDO
                    </option>
                </select>
                <label class="form-label" for="select_ci">Expedido*</label>
            </div>
        </div>
    </div>
    @if (isset($propietario))
        <div class="col-md-3 contenedor_foto">
            <img src="{{ asset('imgs/propietarios/' . $propietario->foto) }}" width="150" height="155"
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
            <img src="{{ asset('imgs/users/user_default.png') }}" width="150" height="155" id="imagen_select">
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

<div class="row">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Dirección:</h4>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group form-float">
            <div class="form-line">
                <div class="form-line">
                    <input type="text" name="dir" value="{{ isset($propietario) ? $propietario->dir : '' }}"
                        class="form-control">
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
                <div class="form-line"> <input type="email" name="correo"
                        value="{{ isset($propietario) ? $propietario->correo : '' }}" class="form-control">
                    <label class="form-label">Email</label>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-float">
                <div class="form-line">
                    <input type="text" name="fono" value="{{ isset($propietario) ? $propietario->fono : '' }}"
                        class="form-control">
                    <label class="form-label">Teléfono</label>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-float">
                <div class="form-line">
                    <input type="text" name="cel" value="{{ isset($propietario) ? $propietario->cel : '' }}"
                        class="form-control">
                    <label class="form-label">Celular</label>
                </div>
            </div>
        </div>
    </div>
