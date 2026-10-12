<div class="row">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Información:</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="nom" value="{{ isset($datosUsuario) ? $datosUsuario->nom : '' }}"
                    class="form-control" required>
                <label class="form-label">Nombre(s)*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="apep" value="{{ isset($datosUsuario) ? $datosUsuario->apep : '' }}"
                    class="form-control" required>
                <label class="form-label">Apellido paterno*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="apem" value="{{ isset($datosUsuario) ? $datosUsuario->apem : '' }}"
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
                <input type="number" name="ci" value="{{ isset($datosUsuario) ? $datosUsuario->ci : '' }}"
                    class="form-control" min="0" required>
                <label class="form-label">Cédula de identidad*</label>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group form-float">
            <div class="form-line">
                <select name="ci_exp" id="select_ci" class="form-control" required>
                    <option value=""></option>
                    <option value="LP"
                        {{ isset($datosUsuario) && $datosUsuario->ci_exp == 'LP' ? 'selected' : '' }}>LA PAZ
                    </option>
                    <option value="CB"
                        {{ isset($datosUsuario) && $datosUsuario->ci_exp == 'CB' ? 'selected' : '' }}>
                        COCHABAMBA
                    </option>
                    <option value="SC"
                        {{ isset($datosUsuario) && $datosUsuario->ci_exp == 'SC' ? 'selected' : '' }}>SANTA
                        CRUZ
                    </option>
                    <option value="OR"
                        {{ isset($datosUsuario) && $datosUsuario->ci_exp == 'OR' ? 'selected' : '' }}>ORURO
                    </option>
                    <option value="PT"
                        {{ isset($datosUsuario) && $datosUsuario->ci_exp == 'PT' ? 'selected' : '' }}>POTOSI
                    </option>
                    <option value="CH"
                        {{ isset($datosUsuario) && $datosUsuario->ci_exp == 'CH' ? 'selected' : '' }}>
                        CHUQUISACA
                    </option>
                    <option value="TJ"
                        {{ isset($datosUsuario) && $datosUsuario->ci_exp == 'TJ' ? 'selected' : '' }}>
                        TARIJA
                    </option>
                    <option value="BN"
                        {{ isset($datosUsuario) && $datosUsuario->ci_exp == 'BN' ? 'selected' : '' }}>BENI
                    </option>
                    <option value="PD"
                        {{ isset($datosUsuario) && $datosUsuario->ci_exp == 'PD' ? 'selected' : '' }}>PANDO
                    </option>
                </select>
                <label class="form-label" for="select_ci">Expedido*</label>
            </div>
        </div>
    </div>
    @if (isset($datosUsuario))
        <div class="col-md-3 contenedor_foto">
            <img src="{{ asset('imgs/personal/' . $datosUsuario->foto) }}" width="150" height="155"
                id="imagen_select">
            <div class="form-group form-float contenedor_subir">
                <div class="form-line">
                    <input type="file" accept="image/*" style='opacity: 0;' name="foto" class="file"
                        id="foto">
                    <label class="subir"for="foto">
                        <i class="fa fa-image"></i> <span>Elegir foto*</span>
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
                <input type="text" name="dir" value="{{ isset($datosUsuario) ? $datosUsuario->dir : '' }}"
                    class="form-control" required>
                <label class="form-label">Dirección*</label>
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
                <input type="email" name="email" value="{{ isset($datosUsuario) ? $datosUsuario->email : '' }}"
                    class="form-control">
                <label class="form-label">Email</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="fono" value="{{ isset($datosUsuario) ? $datosUsuario->fono : '' }}"
                    class="form-control">
                <label class="form-label">Teléfono</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="cel" value="{{ isset($datosUsuario) ? $datosUsuario->cel : '' }}"
                    class="form-control" required>
                <label class="form-label">Celular*</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <select name="tipo" id="select_tipo" class="form-control" required>
                    <option value=""></option>
                    <option value="ADMINISTRADOR"
                        {{ isset($datosUsuario) && $datosUsuario->user->tipo == 'ADMINISTRADOR' ? 'selected' : '' }}>
                        ADMINISTRADOR
                    </option>
                    <option value="AUXILIAR"
                        {{ isset($datosUsuario) && $datosUsuario->user->tipo == 'AUXILIAR' ? 'selected' : '' }}>
                        AUXILIAR
                    </option>
                </select>
                <label class="form-label" for="select_tipo">Tipo de usuario*</label>
            </div>
        </div>
    </div>
</div>
