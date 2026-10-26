<div class="row">
    <div class="col-md-12">
        <h4 style="text-decoration: underline;">Información:</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="cod" value="{{ isset($empresa) ? $empresa->cod : '' }}"
                    class="form-control" required>
                <label class="form-label">Código(s)*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="nit" value="{{ isset($empresa) ? $empresa->nit : '' }}"
                    class="form-control" required>
                <label class="form-label">NIT*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="nro_aut" value="{{ isset($empresa) ? $empresa->nro_aut : '' }}"
                    class="form-control">
                <label class="form-label">Nro. de autorización</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="nro_emp" value="{{ isset($empresa) ? $empresa->nro_emp : '' }}"
                    class="form-control" required>
                <label class="form-label">Nro. de empleador*</label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="name" value="{{ isset($empresa) ? $empresa->name : '' }}"
                    class="form-control" required>
                <label class="form-label">Nombre de la empresa*</label>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="alias" value="{{ isset($empresa) ? $empresa->alias : '' }}"
                    class="form-control" required>
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
                <input type="text" name="pais" value="{{ isset($empresa) ? $empresa->pais : '' }}"
                    class="form-control" required>
                <label class="form-label">País*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="dpto" value="{{ isset($empresa) ? $empresa->dpto : '' }}"
                    class="form-control" required>
                <label class="form-label">Departamento*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="ciudad" value="{{ isset($empresa) ? $empresa->ciudad : '' }}"
                    class="form-control" required>
                <label class="form-label">Ciudad*</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="zona" value="{{ isset($empresa) ? $empresa->zona : '' }}"
                    class="form-control" required>
                <label class="form-label">Zona/Barrio*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="calle" value="{{ isset($empresa) ? $empresa->calle : '' }}"
                    class="form-control" required>
                <label class="form-label">Calle/Avenida*</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="nro" value="{{ isset($empresa) ? $empresa->nro : '' }}"
                    class="form-control" required>
                <label class="form-label">Nro.*</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="email" name="email" value="{{ isset($empresa) ? $empresa->email : '' }}"
                    class="form-control">
                <label class="form-label">Email</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="fono" value="{{ isset($empresa) ? $empresa->fono : '' }}"
                    class="form-control">
                <label class="form-label">Teléfono</label>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="cel" value="{{ isset($empresa) ? $empresa->cel : '' }}"
                    class="form-control">
                <label class="form-label">Celular</label>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-4">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="fax" value="{{ isset($empresa) ? $empresa->fax : '' }}"
                    class="form-control">
                <label class="form-label">Fax</label>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="web" value="{{ isset($empresa) ? $empresa->web : '' }}"
                    class="form-control">
                <label class="form-label">Web</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" name="actividad_eco"
                    value="{{ isset($empresa) ? $empresa->actividad_eco : '' }}" class="form-control">
                <label class="form-label">Actividad económica</label>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 contenedor_foto">
        <img src="{{ asset('imgs/empresa/' . $empresa->logo) }}" width="220" height="155" id="imagen_select">
        <div class="form-group form-float contenedor_subir">
            <div class="form-line">
                <input type="file" accept="image/*" style='opacity: 0;' name="logo" class="file"
                    id="foto">
                <label class="subir"for="foto">
                    <i class="fa fa-image"></i> <span>Elegir logo*</span>
                </label>
            </div>
        </div>
    </div>
</div>
