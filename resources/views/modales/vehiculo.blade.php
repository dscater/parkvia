<div class="modal fade" id="m_vehiculo">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>REGISTRAR VEHICULO</h4>
                <small>Los campos con * son obligatorios</small>
            </div>
            <div class="modal-body">
                <form action="{{ route('vehiculos.store_ingreso') }}" method="POST" id="form_vehiculo"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h4 style="text-decoration: underline;">Información:</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="nom" class="form-control" required>
                                    {{-- {{ Form::text('nom', null, ['class' => 'form-control', 'required']) }} --}}
                                    <label class="form-label">Nombre del vehiculo*</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="placa" class="form-control">
                                    {{-- {{ Form::text('placa', null, ['class' => 'form-control']) }} --}}
                                    <label class="form-label">Placa</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="marca" class="form-control">
                                    {{-- {{ Form::text('marca', null, ['class' => 'form-control']) }} --}}
                                    <label class="form-label">Marca</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="modelo" class="form-control">
                                    {{-- {{ Form::text('modelo', null, ['class' => 'form-control']) }} --}}
                                    <label class="form-label">Modelo</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <select name="tipo_id" id="tipo" class="form-control" required></select>
                                    {{-- {{ Form::select('tipo_id', [], null, ['class' => 'form-control', 'required', 'id' => 'tipo']) }} --}}
                                    <label class="form-label">Tipo*</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <select name="propietario_id" id="propietario_id" class="form-control"
                                        required></select>
                                    {{-- {{ Form::select('propietario_id', [], null, ['class' => 'form-control', 'required', 'id' => 'propietario_id']) }} --}}
                                    <label class="form-label">Propietario*</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="rfid" id="rfid" class="form-control" required>
                                    {{-- {{ Form::text('rfid', null, ['class' => 'form-control', 'required', 'id' => 'rfid']) }} --}}
                                    <label class="form-label">RFID*</label>
                                </div>
                                <div class="help-info">
                                    Seleccione esta caja de texto y pase la tarjeta RFID.
                                </div>
                                @if ($errors->has('rfid'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rfid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <select name="tarifa_id" id="tarifa" class="form-control" required></select>
                                    {{-- {{ Form::select('tarifa_id', [], null, ['class' => 'form-control', 'required', 'id' => 'tarifa']) }} --}}
                                    <label class="form-label">Tarifa*</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 contenedor_foto">
                            <img src="{{ asset('imgs/vehiculos/vehiculo_default.jpg') }}" width="150" height="155"
                                id="imagen_select_v">
                            <div class="form-group form-float contenedor_subir">
                                <div class="form-line">
                                    <input type="file" accept="image/*" style='opacity: 0;' name="foto"
                                        class="file" id="foto_v">
                                    <label class="subir"for="foto_v">
                                        <i class="fa fa-image"></i> <span>Elegir foto</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row oculto" id="error_vehiculo">
                        <div class="col-md-12" style="color:red">
                            Completa todos los campos obligatorios(*)
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-info" id="btnModalProp">REGISTRAR PROPIETARIO</button>
                <button class="btn btn-primary" id="btnRegVehiculo">REGISTRAR VEHÍCULO</button>
            </div>
        </div>
    </div>
</div>
