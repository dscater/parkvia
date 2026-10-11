@extends('layouts.admin')

@section('css')
<!-- Waves Effect Css -->
<link href="{{ asset('AdminBSBMaterialDesign-master/plugins/node-waves/waves.css') }}" rel="stylesheet" />

<!-- Animation Css -->
<link href="{{ asset('AdminBSBMaterialDesign-master/plugins/animate-css/animate.css') }}" rel="stylesheet" />

<!-- Sweet Alert Css -->
<link href="{{ asset('AdminBSBMaterialDesign-master/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

<style type="text/css">
div.form-group.contenedor_subir{
    position: relative;
}

#foto{
max-width: 100%;
}

.subir{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background: #f55d3e;
    color:#fff;
    border:0px solid #fff;
    position: absolute;
    top: 0;
    width: 100%
}

.subir span{
    margin-left: 5px;
}

.subir:hover{
    cursor: pointer;
    color:#fff;
    background: #F44336;
}

.contenedor_foto{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.contenedor_subir .form-line.error{
    position: relative;
}

.contenedor_subir label.error{
    position: absolute;
    bottom: -40px;
}

.titulo_derecha{
    position: absolute;
    top: -40px;
    right: -55px;
    width: 180px;
}

.titulo_derecha h2{
    text-align: center;
    font-size: 1.5em;
    color:#0080ff;
    font-family: Calibri, sans-serif;
    border:solid 1px #0080ff;
    background: #c4e1ff;
    margin-bottom: 2px;
}

.titulo_derecha .contenedor_info{
    padding-left: 5px;
    width: 100%;
    border:solid 1px #0080ff;
}

.titulo_derecha .contenedor_info p.info{
    font-size: 0.75em;
}

.qr img{
    width: 150px;
    height: 150px;
}

</style>

<link rel="stylesheet" href="{{asset('css/factura_ver.css')}}">

@endsection

@section('nom_empresa')
{{ $empresa->name }}
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                VER COBRO
            </h2>
        </div>
        <!-- Basic Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>INFORMACIÓN DE COBRO</h2>
                        {{-- <small>Los campos con * son obligatorios.</small> --}}
                    </div>
                    <div class="body">
                        <div class="contenedor_factura">
                            <div class="elemento nom_empresa">
                                "{{$empresa->name}}"
                            </div>
                            <div class="elemento direccion">
                                {{$empresa->zona}} {{$empresa->calle}} {{$empresa->nro}}
                            </div>
                            <div class="elemento fono">
                                Teléfono: {{$empresa->fono}}
                            </div>
                            <div class="elemento lp">
                                {{$empresa->dpto}} - {{$empresa->pais}}
                            </div>
                            <div class="elemento txt_fo">
                                FACTURA ORIGINAL
                            </div>
                            <div class="elemento detalle">
                                NIT: {{$empresa->nit}} <br>
                                FACTURA NRO: {{$cobro->factura->nro_factura}} <br>
                                AUTORIZACIÓN: {{$empresa->nro_aut}}
                            </div>
                            <div class="elemento act_eco">
                                Act. Eco.: "{{$empresa->actividad_eco}}"
                            </div>
                            <div class="informacion">
                                <table>
                                    <tr>
                                        <td width="10%">Fecha:</td>
                                        <td class="izquierda">{{$cobro->fecha_reg}}</td>
                                    </tr>
                                    <tr>
                                        <td>Hora:</td>
                                        <td class="izquierda">{{$cobro->hora}}</td>
                                    </tr>
                                    <tr>
                                        <td>Señor(es):</td>
                                        <td class="izquierda">{{$cobro->factura->a_nombre}}</td>
                                    </tr>
                                    <tr>
                                        <td>NIT/CI:</td>
                                        <td class="izquierda">{{$cobro->factura->nit}}</td>
                                    </tr>
                                    <tr>
                                        <td>Entrada:</td>
                                        <td class="izquierda">{{date('H:i',strtotime($cobro->hora_ingreso))}} {{date('d/m/Y',strtotime($cobro->fecha_ingreso))}}</td>
                                    </tr>
                                    <tr>
                                        <td>Salida:</td>
                                        <td class="izquierda">{{date('H:i',strtotime($cobro->salida->hora))}} {{date('d/m/Y',strtotime($cobro->salida->fecha_reg))}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tiempo:</td>
                                        <td class="izquierda">{{$cobro->tiempo_cobrado}} HORA(S)</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="cobro">
                                <table>
                                    <tr class="punteado">
                                        <td class="centreado">CANTIDAD</td>
                                        <td class="centreado">DESCRIPCIÓN</td>
                                        <td class="centreado">P. UNIDAD</td>
                                        <td class="centreado">SUB TOTAL</td>
                                    </tr>
                                    <tr>
                                        <td class="centreado">1</td>
                                        <td class="izquierda">SERVICIO DE PARQUEO - {{$cobro->tarifa->nom}} {{$cobro->tarifa->horas}} HORA(S)</td>
                                        <td class="centreado">{{$cobro->tarifa->precio}}</td>
                                        <td class="centreado">{{$cobro->total}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="derecha bold">TOTAL Bs.</td>
                                        <td class="centreado">{{$cobro->total}}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="izquierda literal">
                                Son: {{$literal}}
                            </div>
                            <div class="izquierda cod_control">
                                CÓDIGO DE CONTROL: {{$cobro->factura->codigo_control}}
                            </div>
                            <div class="izquierda fecha_emision">
                                FECHA LÍMITE DE EMISIÓN: {{$cobro->factura->fecha_emision}}
                            </div>
                            <div class="centreado qr">
                                <img src="{{asset('imgs/qr/'.$cobro->factura->qr)}}" alt="">    
                            </div>
                            <div class="mensaje">
                                <div class="info1">
                                    "ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAÍS EL USO ILÍCITO DE ÉSTA SERA SANCIONADO A LEY"
                                </div>
                                <div class="info2">
                                    Ley Nº 453: Los servicios deben suministrarse en condiciones de inocuidad, calidad y seguridad.
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{route('cobros.factura',$cobro->id)}}" target="_blank" class="btn btn-lg btn-primary">
                                    <i class="material-icons">file_download</i>
                                    <span>Exportar</span>
                                </a>
                            </div>
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