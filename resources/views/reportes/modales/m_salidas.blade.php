<div class="modal fade in" id="m_salidas" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <form action="{{ route('reportes.salidas') }}" method="get" target="_blank"
            class="modal-content modal-col-light-blue">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">SALIDA DE VEHÍCULOS</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control  show-tick" name="filtro" id="filtro">
                                    <option value="TODOS">TODOS</option>
                                    <option value="FECHA">POR FECHA DE REGISTRO</option>
                                    <option value="TIPO">POR TIPO DE VEHÍCULO</option>
                                    <option value="TARIFA">POR TARIFA</option>
                                    <option value="HORA">POR HORA</option>
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

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label>Hora inicio:</label>
                                <input type="time" class="form-control" name="hora_ini" id="hora_ini"
                                    value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-line">
                                <label>Hora fin:</label>
                                <input type="time" class="form-control" name="hora_fin" id="hora_fin"
                                    value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-line">
                                <label>Tipo de vehículo:</label>
                                <select class="form-control show-tick" data-live-search="true" name="tipo"
                                    id="tipo">
                                    <option value="TODOS">TODOS</option>
                                    @foreach ($tipos as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-line">
                                <label>Tarifa:</label>
                                <select class="form-control show-tick" data-live-search="true" name="tarifa"
                                    id="tarifa">
                                    <option value="TODOS">TODOS</option>
                                    @foreach ($tarifas as $key => $value)
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
