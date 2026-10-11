@extends('layouts.admin')

@section('css')
    <!-- Waves Effect Css -->
    <link href="{{ asset('AdminBSBMaterialDesign-master/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('AdminBSBMaterialDesign-master/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="{{ asset('AdminBSBMaterialDesign-master/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link
        href="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mapeo.css') }}">
@endsection

@section('nom_empresa')
    {{ $empresa->name }}
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 botones">
                    <a href="{{ route('secciones.index') }}" class="btn btn-primary"><i
                            class="material-icons">border_all</i><span>Secciones</span></a>
                </div>
                @if (Auth::user()->hasPermiso('secciones.create'))
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 botones">
                        <a href="#" class="btn btn-success" id="btnAbreModal"><i
                                class="material-icons">add</i><span>Agregar</span></a>
                    </div>
                @endif
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                {{ $seccion->nom }}
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label style="display:flex;">Disponibles &nbsp;&nbsp;<span
                                            class="cuadrado border1 disponible"></span></label>
                                    <label style="display:flex;">Ocupados &nbsp;&nbsp;<span
                                            class="cuadrado border1 ocupado"></span></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="contenedor" class="contenedor">
                                        @php
                                            $contador = 1;
                                            $estado = '';
                                        @endphp
                                        @foreach ($mapeo as $key => $value)
                                            @php
                                                // $estado = $value->ocupado == 1 ? 'ocupado' : 'disponible';
                                                $estado = 'b_abajo b_derecha b_izquierda';
                                                if ($key < 5) {
                                                    $estado = 'b_arriba b_derecha b_izquierda';
                                                }
                                            @endphp
                                            <div class="elemento {{ $estado }}" data-toggle="tooltip"
                                                title="Seleccionar para modificar o eliminar">
                                                @if ($value->ocupado == 1)
                                                    <img src="{{ asset('imgs/ocupado.png') }}" alt="">
                                                @endif
                                                <input type="text" class="id" value="{{ $value->id }}" readonly
                                                    hidden>
                                                <input type="text" class="nom" value="{{ $value->nom }}" readonly
                                                    hidden>
                                                <div class="nombre">
                                                    {{ $value->nom }}
                                                </div>
                                            </div>

                                            @if ($contador % 5 == 0)
                                                <div class="separador b_arriba b_abajo">PARQUEO</div>
                                            @endif
                                            @php
                                                $contador++;
                                            @endphp
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
        <input type="text" id="url_carga" value="{{ route('mapeos.index', $seccion->id) }}" hidden>
        <input type="text" id="id_seccion" value="{{ $seccion->id }}" hidden>
        <input type="text" id="url_acciones" value="{{ route('mapeos.acciones') }}" hidden>
        @include('secciones.modales.modal')
    </section>
@endsection

@section('scripts')
    <!-- Select Plugin Js -->
    {{-- <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script> --}}

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/node-waves/waves.js') }}"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script
        src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}">
    </script>
    <script
        src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}">
    </script>
    <script
        src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}">
    </script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/jszip.min.js') }}">
    </script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}">
    </script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}">
    </script>
    <script
        src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}">
    </script>
    <script
        src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}">
    </script>

    <!-- Custom Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/js/admin.js') }}"></script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/js/pages/ui/notifications.js') }}"></script>


    <script src="{{ asset('js/mapeo.js') }}"></script>

    <script type="text/javascript">
        @if (session('success'))
            showNotification('alert-success', 'USUARIO REGISTRADO CON ÉXITO!!! ', 'top', 'right', 'animated bounceInRight',
                'animated bounceOutRight');
            // showSuccessMessage('Registro éxitoso','');
        @endif
    </script>
@endsection
