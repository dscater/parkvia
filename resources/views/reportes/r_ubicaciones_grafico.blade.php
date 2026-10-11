@extends('layouts.admin')

@section('css')
<!-- Waves Effect Css -->
<link href="{{ asset('AdminBSBMaterialDesign-master/plugins/node-waves/waves.css') }}" rel="stylesheet" />

<!-- Animation Css -->
<link href="{{ asset('AdminBSBMaterialDesign-master/plugins/animate-css/animate.css') }}" rel="stylesheet" />

<!-- Sweetalert Css -->
<link href="{{ asset('AdminBSBMaterialDesign-master/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

<!-- JQuery DataTable Css -->
<link href="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

<style>
    .reporte a{
        display: flex;
        flex-direction: column;
        width: 100%;
        transition: transform 0.3s;
    }
    
    .reporte a:hover{
        transform: scale(0.95);
    }
    
    .reporte a i{
        font-size: 1.3em;
    
    }
    
    .reporte a span{
        font-size: 1.3em;
    }
    
    .reporte a span{
        margin:5px;
    }
    </style>

@endsection

@section('nom_empresa')
{{ $empresa->name }}
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            UBICACIONES-GRÁFICO
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-12 tarifa">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>Sección:</label>
                                        <select class="form-control show-tick" data-live-search="true" name="seccion" id="seccion">
                                            <option value="TODOS">TODOS</option>
                                            @foreach($secciones as $key => $value)
                                                <option value="{{$value->id}}">{{$value->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
<input type="text" id="url_ubicaciones" value="{{route('reportes.cargaUbicaciones')}}" hidden>
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

<!-- Custom Js -->
<script src="{{ asset('AdminBSBMaterialDesign-master/js/admin.js') }}"></script>
<script src="{{ asset('AdminBSBMaterialDesign-master/js/pages/ui/notifications.js') }}"></script>

<script src="{{url('')}}/Highcharts/code/highcharts.js"></script>
<script src="{{url('')}}/Highcharts/code/modules/data.js"></script>
<script src="{{url('')}}/Highcharts/code/modules/exporting.js"></script>
<script src="{{url('')}}/Highcharts/code/highcharts-3d.js"></script>

<script>
    Highcharts.setOptions({
        lang:{
            printChart:'Imprimir',
            downloadJPEG:'Descargar JPEG',
            downloadPNG:'Descargar PNG',
            downloadPDF:'Descargar documento PDF',
            downloadSVG:'Descargar archivo SVG',
        }
    });
</script>

<script src="{{ asset('js/eliminar.js') }}"></script>
<script src="{{ asset('js/filtro_grafico_ubicaciones.js') }}"></script>

<script type="text/javascript">
    @if(session('success'))
    showNotification('alert-success', 'USUARIO REGISTRADO CON ÉXITO!!! ','top', 'right', 'animated bounceInRight', 'animated bounceOutRight');
      // showSuccessMessage('Registro éxitoso','');
    @endif
</script>

@endsection
