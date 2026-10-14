<div class="modal fade" id="m_propietario">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>REGISTRAR PROPIETARIO</h4>
                <small>Los campos con * son obligatorios</small>
            </div>
            <div class="modal-body">
                <form action="{{ route('propietarios.store') }}" method="POST" id="form_propietario"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <h4 style="text-decoration: underline;">Información:</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="nom" class="form-control" required>
                                    {{-- {{ Form::text('nom', null, ['class' => 'form-control', 'required']) }} --}}
                                    <label class="form-label">Nombre(s)*</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="apep" class="form-control" required>
                                    {{-- {{ Form::text('apep', null, ['class' => 'form-control', 'required']) }} --}}
                                    <label class="form-label">Apellido paterno*</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="apem" class="form-control">
                                    {{-- {{ Form::text('apem', null, ['class' => 'form-control']) }} --}}
                                    <label class="form-label">Apellido materno</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" name="ci" min="0" class="form-control" required>
                                    {{-- {{ Form::number('ci', null, ['class' => 'form-control', 'required', 'min' => '0']) }} --}}
                                    <label class="form-label">Cédula de identidad*</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <select name="ci_exp" id="select_ci" class="form-control" required>
                                        <option value=""></option>
                                        <option value="LP">LA PAZ</option>
                                        <option value="CB">COCHABAMBA</option>
                                        <option value="SC">SANTA CRUZ</option>
                                        <option value="OR">ORURO</option>
                                        <option value="PT">POTOSI</option>
                                        <option value="CH">CHUQUISACA</option>
                                        <option value="TJ">TARIJA</option>
                                        <option value="BN">BENI</option>
                                        <option value="PD">PANDO</option>
                                    </select>
                                    <label class="form-label" for="select_ci">Expedido*</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 contenedor_foto">
                            <img src="{{ asset('imgs/users/user_default.png') }}" width="150" height="155"
                                id="imagen_select_p">
                            <div class="form-group form-float contenedor_subir">
                                <div class="form-line">
                                    <input type="file" accept="image/*" style='opacity: 0;' name="foto"
                                        class="file" id="foto_p">
                                    <label class="subir"for="foto_p">
                                        <i class="fa fa-image"></i> <span>Elegir foto</span>
                                    </label>
                                </div>
                            </div>
                        </div>
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
                                    <input type="text" name="dir" class="form-control">
                                    {{-- {{ Form::text('dir', null, ['class' => 'form-control']) }} --}}
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
                                <div class="form-line">
                                    <input type="email" name="correo" class="form-control" required>
                                    {{-- {{ Form::email('correo', null, ['class' => 'form-control']) }} --}}
                                    <label class="form-label">Email*</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="fono" class="form-control">
                                    {{-- {{ Form::text('fono', null, ['class' => 'form-control']) }} --}}
                                    <label class="form-label">Teléfono</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="cel" class="form-control">
                                    {{-- {{ Form::text('cel', null, ['class' => 'form-control']) }} --}}
                                    <label class="form-label">Celular</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row oculto" id="error_propietario">
                        <div class="col-md-12" style="color:red">
                            Completa todos los campos obligatorios(*)
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button class="btn btn-info" id="btnModalVe">REGISTRAR VEHICULO</button>
                <button class="btn btn-primary" id="btnRegProp">REGISTRAR</button>
            </div>
        </div>
    </div>
</div>
