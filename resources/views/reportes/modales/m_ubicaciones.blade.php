<div class="modal fade in" id="m_ubicaciones" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <form action="{{ route('reportes.ubicaciones') }}" method="get" target="_blank"
            class="modal-content modal-col-light-blue">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">LISTA DE UBICACIONES DISPONIBLES </h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-line">
                                <label>Sección:</label>
                                <select class="form-control show-tick" data-live-search="true" name="seccion"
                                    id="seccion">
                                    <option value="TODOS">TODOS</option>
                                    @foreach ($secciones as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">EXPORTAR</button>
                <a class="btn btn-link waves-effect" data-dismiss="modal">CERRAR</a>
            </div>
        </form>
    </div>
</div>
