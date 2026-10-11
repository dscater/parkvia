@extends('layouts.admin')

@section('css')
    <!-- Waves Effect Css -->
    <link href="{{ asset('AdminBSBMaterialDesign-master/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('AdminBSBMaterialDesign-master/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('AdminBSBMaterialDesign-master/plugins/morrisjs/morris.css') }})" rel="stylesheet" />

    <style>
        .nombre_empresa {
            width: 100%;
            text-align: center;
            font-weight: 900;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: #055595;
        }
    </style>
@endsection

@section('nom_empresa')
    {{ $empresa->name }}
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row-fixed">
                <h2 class="nombre_empresa">
                    {{ $empresa->name }}
                </h2>
            </div>
            <div class="block-header">
                <h2>TABLERO</h2>
            </div>
            <!-- Widgets -->
            @if (Auth::user()->tipo == 'ADMINISTRADOR')
                @include('includes.home_admin')
            @endif
            @if (Auth::user()->tipo == 'AUXILIAR')
                @include('includes.home_auxiliar')
            @endif

            <div class="row clearfix border">
                <div class="col-md-12">
                    <select class="form-control show-tick" style="border-radius:0px!important;border:none;" name="seccion"
                        id="seccion">
                        <option value="TODOS">TODOS</option>
                        @foreach ($secciones_lista as $key => $value)
                            <option value="{{ $value->id }}">{{ $value->nom }}</option>
                        @endforeach
                    </select>
                    <div id="container"style="width:100%!important;height: 400px; margin: 0 auto"></div>
                </div>
            </div>

            <!-- #END# Widgets -->
        </div>
    </section>
    <input type="text" id="url_ubicaciones" value="{{ route('reportes.cargaUbicaciones') }}" hidden>
@endsection

@section('scripts')
    <!-- Select Plugin Js -->
    {{-- <script src="{{asset('AdminBSBMaterialDesign-master/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script> --}}

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('AdminBSBMaterialDesign-master/js/admin.js') }}"></script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/js/pages/index.js') }}"></script>
    <script src="{{ asset('AdminBSBMaterialDesign-master/js/pages/ui/notifications.js') }}"></script>

    <script src="{{ url('') }}/Highcharts/code/highcharts.js"></script>
    <script src="{{ url('') }}/Highcharts/code/modules/data.js"></script>
    <script src="{{ url('') }}/Highcharts/code/modules/exporting.js"></script>
    <script src="{{ url('') }}/Highcharts/code/highcharts-3d.js"></script>

    <script>
        Highcharts.setOptions({
            lang: {
                printChart: 'Imprimir',
                downloadJPEG: 'Descargar JPEG',
                downloadPNG: 'Descargar PNG',
                downloadPDF: 'Descargar documento PDF',
                downloadSVG: 'Descargar archivo SVG',
            }
        });
    </script>
    <script src="{{ asset('js/filtro_grafico_ubicaciones.js') }}"></script>

    <script>
        showNotification('alert-success', '¡BIENVENIDO AL SISTEMA PARQUEO...!!!', 'top', 'center', 'animated bounceInTop',
            'animated bounceOutLeft');
    </script>
@endsection
