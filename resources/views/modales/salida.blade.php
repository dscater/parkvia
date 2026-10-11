<div class="modal fade" id="m_cobro">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>COBRAR SALIDA</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('cobros.realizar_cobro') }}" method="get" id="form_salida" target="_blank">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label">VEHÍCULO:</label>
                            <input type="text" name="vehiculo" class="form-control" id="vehiculo" readonly>
                            {{-- {{ Form::text('vehiculo', null, ['class' => 'form-control', 'id' => 'vehiculo', 'readonly']) }} --}}
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">PROPIETARIO:</label>
                            <input type="text" name="propietario" class="form-control" id="propietario" readonly>
                            {{-- {{ Form::text('propietario', null, ['class' => 'form-control', 'id' => 'propietario', 'readonly']) }} --}}
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">FECHA DE INGRESO:</label>
                            <input type="text" name="fecha_ingreso" class="form-control" id="fecha_ingreso" readonly>
                            {{-- {{ Form::text('fecha_ingreso', null, ['class' => 'form-control', 'id' => 'fecha_ingreso', 'readonly']) }} --}}
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">HORA DE INGRESO:</label>
                            <input type="text" name="hora_ingreso" class="form-control" id="hora_ingreso" readonly>
                            {{-- {{ Form::text('hora_ingreso', null, ['class' => 'form-control', 'id' => 'hora_ingreso', 'readonly']) }} --}}
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">FECHA DE SALIDA:</label>
                            <input type="text" name="fecha_salida" class="form-control" id="fecha_salida" readonly>
                            {{-- {{ Form::text('fecha_salida', null, ['class' => 'form-control', 'id' => 'fecha_salida', 'readonly']) }} --}}
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">HORA DE SALIDA:</label>
                            <input type="text" name="hora_salida" class="form-control" id="hora_salida" readonly>
                            {{-- {{ Form::text('hora_salida', null, ['class' => 'form-control', 'id' => 'hora_salida', 'readonly']) }} --}}
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">TIEMPO COBRADO(Hrs.):</label>
                            <input type="text" name="tiempo_cobrado" class="form-control" id="tiempo_cobrado">
                            {{-- {{ Form::text('tiempo_cobrado', null, ['class' => 'form-control', 'id' => 'tiempo_cobrado']) }} --}}
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">TOTAL(Bs.):</label>
                            <input type="text" name="total" class="form-control" id="total">
                            {{-- {{ Form::text('total', null, ['class' => 'form-control', 'id' => 'total']) }} --}}
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">A NOMBRE:</label>
                            <input type="text" name="a_nombre" class="form-control" id="a_nombre">
                            {{-- {{ Form::text('a_nombre', null, ['class' => 'form-control', 'id' => 'a_nombre']) }} --}}
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">NIT/C.I.:</label>
                            <input type="text" name="nit" class="form-control" id="nit">
                            {{-- {{ Form::text('nit', null, ['class' => 'form-control', 'id' => 'nit']) }} --}}
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <input type="text" id="cobro_id" name="cobro_id" readonly hidden>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" id="btnCobrar">COBRAR</button>
            </div>
        </div>
    </div>
</div>
