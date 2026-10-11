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
@endsection

@section('nom_empresa')
{{ $empresa->name }}
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
            <div class="row clearfix">
                @if(Auth::user()->hasPermiso('ingresos_salidas.create'))
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 botones">
                    <a href="{{ route('ingresos_salidas.create') }}" class="btn btn-primary"><i class="material-icons">add</i><span>Nuevo registro</span></a>
                </div>
                @endif
            </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            INGRESOS Y SALIDAS
                        </h2>
                    </div>
                    <div class="body">
                        <input type="text" name="url_lista" id="url_lista" value="{{ route('ingresos_salidas.index') }}" hidden>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Vehiculo</th>
                                        <th>Acción</th>
                                        <th>Observación</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Código</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Vehiculo</th>
                                        <th>Acción</th>
                                        <th>Observación</th>
                                        <th>Acción</th>
                                    </tr>
                                </tfoot>
                                <tbody id="datos_lista">
                                @foreach($ingresos_salidas as $key => $ingreso_salida)
                                <tr>
                                    <td>{{ $ingreso_salida->id }}</td>
                                    <td>{{ $ingreso_salida->fecha_reg }}</td>
                                    <td>{{ $ingreso_salida->hora }}</td>
                                    <td>{{ $ingreso_salida->vehiculo->nom }}</td>
                                    <td>{{ $ingreso_salida->accion }}</td>
                                    <td>{{ $ingreso_salida->observacion }}</td>
                                    <td>
                                        {{-- <input type="text" name="eliminar" class="url_eliminar" value="{{ route('ingresos_salidas.destroy',$ingreso_salida->id) }}" hidden>
                                        <a href="#" title="Eliminar" class="eliminar"><i class="material-icons eliminar">delete</i>
                                        </a>
                                        <a href="{{ route('ingresos_salidas.edit',$ingreso_salida->id) }}" title="Editar"><i class="material-icons editar">edit</i>
                                        </a> --}}
                                        <a href="{{ route('ingresos_salidas.show',$ingreso_salida->id) }}"><i class="material-icons">visibility</i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
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

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/node-waves/waves.js') }}"></script>

<!-- SweetAlert Plugin Js -->
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/sweetalert/sweetalert.min.js') }}"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
<script src="{{ asset('AdminBSBMaterialDesign-master/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('AdminBSBMaterialDesign-master/js/admin.js') }}"></script>
<script src="{{ asset('AdminBSBMaterialDesign-master/js/pages/ui/notifications.js') }}"></script>

<script src="{{ asset('js/eliminar.js') }}"></script>

<script type="text/javascript">
    $(function () {
    $('.js-basic-example').DataTable({
          responsive: true,
          "order": [[ 0, "desc" ]],
          "columns":[
            {'width':'10%'},
            {'width':'13%'},
            {'width':'7%'},
            null,
            null,
            null,
            {'width':'5%'},
          ],
        //   pageLength: 25,
      });
    });
  </script>

<script type="text/javascript">
    @if(session('registrado'))
    showNotification('alert-success', 'REGISTRO REALIZADO CON ÉXITO! ','top', 'right', 'animated bounceInRight', 'animated bounceOutRight');
      // showSuccessMessage('Registro éxitoso','');
    @endif

    @if(session('NoMapeo'))
    swal('ERROR!','EL ÚLTIMO REGISTRO DEL VEHICULO SELECCIONADO ES DE SALIDA Y NO SE PUEDE REGISTRAR UNA SALIDA MAS', "error");
    @endif
    
    @if(session('NoPuede'))
    let msg = {{session('NoPuede')}}
    swal('ERROR!',msg, "error");
    @endif

    $('#datos_lista').on('click','tr td a.eliminar',function(e){
        e.preventDefault();
        var fila = $(this).parents('tr');
        var url_eliminar = $(this).siblings('input.url_eliminar').val();
        console.log(url_eliminar);
        let codigo = $(this).parents('tr').children('td').eq(0).text();

        let titulo = 'Eliminar';
        let texto = `¿Estás seguro(a) de eliminar el registro: ${codigo}?. Esta acción no se podra deshacer.`;
        let tipo = 'warning';//warning es el tipo de icono que aparece en el modal
        let texto_btn = 'Si, eliminalo!';
        let titulo2 = 'Eliminado!';
        let texto2 = 'El registro se elimino con éxito!';
        let token = $('#token').val();
        let url_lista = $('#url_lista').val();

        showConfirmMessage(titulo,texto,tipo,texto_btn,titulo2,texto2,url_eliminar,token,url_lista,fila);
    });
</script>

@endsection
