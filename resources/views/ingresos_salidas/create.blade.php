@extends('layouts.admin')

@section('css')
    <!-- Waves Effect Css -->
    <link href="{{ asset('AdminBSBMaterialDesign-master/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('AdminBSBMaterialDesign-master/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="{{ asset('AdminBSBMaterialDesign-master/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

    <style type="text/css">
        div.form-group.contenedor_subir {
            position: relative;
        }

        #foto {
            max-width: 100%;
        }

        .subir {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background: #f55d3e;
            color: #fff;
            border: 0px solid #fff;
            position: absolute;
            top: 0;
            width: 100%
        }

        .subir span {
            margin-left: 5px;
        }

        .subir:hover {
            cursor: pointer;
            color: #fff;
            background: #F44336;
        }

        .contenedor_foto {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .contenedor_subir .form-line.error {
            position: relative;
        }

        .contenedor_subir label.error {
            position: absolute;
            bottom: -40px;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/tarifa.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mapeo.css') }}">
@endsection

@section('nom_empresa')
    {{ $empresa->name }}
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    REGISTRAR INGRESO/SALIDA
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>NUEVO REGISTRO</h2>
                            <small>Los campos con * son obligatorios.</small>
                        </div>
                        <div class="body">
                            <form action="{{ route('ingresos_salidas.store') }}" method="post"
                                enctype="multipart/form-data" id="form_validation">
                                @csrf
                                @include('ingresos_salidas.forms.form')
                                <button class="btn btn-primary btn-lg waves-effect" id="btnGuardar" type="submit"><i
                                        class="material-icons">save</i><span>GUARDAR</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>
    <input type="text" id="sw" value="" hidden>

    <input type="text" value="{{ route('ingresos_salidas.carga_accion') }}" id="url_accion" hidden>
    <input type="text" value="{{ route('cobros.obtener_tarifa') }}" id="url_tarifa" hidden>
    <input type="text" value="{{ route('mapeos.obtener_mapeo') }}" id="url_mapeo_ig" hidden>
@endsection

@section('scripts')
    <!-- Select Plugin Js -->
    {{-- <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script> --}}

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-steps/jquery.steps.js') }}"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/node-waves/waves.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/js/admin.js') }}"></script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/js/pages/forms/form-validation.js') }}"></script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/js/pages/ui/notifications.js') }}"></script>

    <script src="{{ asset('js/ingreso_salida.js') }}"></script>

    <script type="text/javascript">
        $('body').on('change', '#foto', function(e) {
            addImage(e);
        });

        function addImage(e) {
            var file = e.target.files[0],
                imageType = /image.*/;

            if (!file.type.match(imageType))
                return;

            var reader = new FileReader();
            reader.onload = fileOnload;
            reader.readAsDataURL(file);
        }

        function fileOnload(e) {
            var result = e.target.result;
            $('#imagen_select').attr("src", result);
        }
    </script>
@endsection
