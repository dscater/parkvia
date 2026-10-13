<div class="modal fade in" id="m_ingresos_salidas_vehiculos" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <form action="{{ route('reportes.ingresos_salidas_vehiculos') }}" method="get" target="_blank"
            class="modal-content modal-col-light-blue">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">INGRESOS Y SALIDAS POR VEHÍCULOS</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-line">
                                <label>Vehículos:</label>
                                <select class="form-control show-tick" data-live-search="true" name="vehi"
                                    id="vehi">

                                    @foreach ($vehiculos as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->placa }} - {{ $value->nom }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label>Fecha inicio:</label>
                                <input type="date" class="form-control" name="fecha_ini" id="fecha_ini"
                                    value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label>Fecha fin:</label>
                                <input type="date" class="form-control" name="fecha_fin" id="fecha_fin"
                                    value="{{ date('Y-m-d') }}">
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
