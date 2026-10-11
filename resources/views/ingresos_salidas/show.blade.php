@extends('layouts.admin')

@section('css')
<!-- Waves Effect Css -->
<link href="{{ asset('AdminBSBMaterialDesign-master/plugins/node-waves/waves.css') }}" rel="stylesheet" />

<!-- Animation Css -->
<link href="{{ asset('AdminBSBMaterialDesign-master/plugins/animate-css/animate.css') }}" rel="stylesheet" />

<!-- Sweet Alert Css -->
<link href="{{ asset('AdminBSBMaterialDesign-master/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

<link rel="stylesheet" href="{{asset('css/ver_ingresos_salidas.css')}}">

@endsection

@section('nom_empresa')
{{ $empresa->name }}
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                INGRESO Y SALIDA DE VEHICULOS
            </h2>
        </div>
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>VER INFORMACIÓN</h2>
                    </div>
                    <div class="body">
                        <div class="contenedor">
                            <table border="1">
                                <tbody>
                                    <tr>
                                        <td rowspan="6" width="20%" class="imagen">
                                            <img src="{{asset('imgs/vehiculos/'.$ingreso_salida->vehiculo->foto)}}" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="izquierda bold" width="14%">ACCIÓN</td>
                                        <td class="izquierda" colspan="2">
                                            {{$ingreso_salida->accion}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="izquierda bold">
                                            VEHICULO:
                                        </td>
                                        <td class="izquierda">
                                            {{$ingreso_salida->vehiculo->nom}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="izquierda bold">
                                            PROPIETARIO:
                                        </td>
                                        <td class="izquierda">
                                            {{$ingreso_salida->vehiculo->propietario->nom}} {{$ingreso_salida->vehiculo->propietario->apep}} {{$ingreso_salida->vehiculo->propietario->apem}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="izquierda bold">
                                            HORA:
                                        </td>
                                        <td class="izquierda">
                                            {{$ingreso_salida->hora}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="izquierda bold">FECHA:</td>
                                        <td class="izquierda">
                                            {{date('d/m/Y',strtotime($ingreso_salida->fecha_reg))}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->
</div>
</section>

@endsection

@section('scripts')
<!-- Select Plugin Js -->
{{-- <script src="{{ asset('AdminBSBMaterialDesign-master/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script> --}}

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Bootstrap Notify Plugin Js -->
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

<!-- Jquery Validation Plugin Css -->
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-validation/jquery.validate.js') }}"></script>

<!-- JQuery Steps Plugin Js -->
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-steps/jquery.steps.js') }}"></script>

<!-- Sweet Alert Plugin Js -->
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/sweetalert/sweetalert.min.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/node-waves/waves.js') }}"></script>

<!-- SweetAlert Plugin Js -->
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/sweetalert/sweetalert.min.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('AdminBSBMaterialDesign-master/js/admin.js') }}"></script>
<script src="{{ asset('AdminBSBMaterialDesign-master/js/pages/forms/form-validation.js') }}"></script>

<script src="{{ asset('AdminBSBMaterialDesign-master/js/pages/ui/notifications.js') }}"></script>
<script type="text/javascript">
    @if(session('registrado'))
    showNotification('alert-success', 'REGISTRO ÉXITOSO!','top', 'right', 'animated bounceInRight', 'animated bounceOutRight');
      // showSuccessMessage('Registro éxitoso','');
    @endif

    @if(session('editado'))
    showNotification('alert-success', 'MODIFICACIÓN EXITOSA! ','top', 'right', 'animated bounceInRight', 'animated bounceOutRight');
      // showSuccessMessage('Registro éxitoso','');
    @endif

    $('body').on('change','#foto',function(e){
        addImage(e);
    });

    function addImage(e){
        var file = e.target.files[0],
        imageType = /image.*/;

        if (!file.type.match(imageType))
            return;

        var reader = new FileReader();
        reader.onload = fileOnload;
        reader.readAsDataURL(file);
    }

    function fileOnload(e) {
        var result=e.target.result;
        $('#imagen_select').attr("src",result);
    }

</script>
@endsection