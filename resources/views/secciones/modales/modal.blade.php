<div class="modal fade" id="modal_mapeo">
    <div class="modal-dialog">
        <div class="modal-content modal-col-blue">
            <div class="modal-header">
                <h4 id="titulo_modal" class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <input type="text" name="id_elemento" id="id_elemento" hidden>
                <div class="row">
                    <div class="col-md-12">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nom_elemento" id="nom_elemento">
                    </div>
                </div>
                <div class="row oculto" id="msj_error">
                    <div class="col-md-12">
                        <div class="error">
                            DEBES INGRESAR UN NOMBRE
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                @if(Auth::user()->hasPermiso('secciones.create'))
                <button class="btn btn-primary" id="btnAgregar">AGREGAR</button>
                @endif
                @if(Auth::user()->hasPermiso('secciones.edit'))
                <button class="btn btn-warning" id="btnModificar">MODIFICAR</button>
                @endif
                @if(Auth::user()->hasPermiso('secciones.destroy'))
                <button class="btn btn-danger" id="btnEliminar">ELIMINAR</button>
                @endif

                <button class="btn btn-defaults" data-dismiss="modal">CERRAR</button>
            </div>
        </div>
    </div>
</div>