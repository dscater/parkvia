<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura</title>
    <style type="text/css">
    *{
        /* font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
    }

    @page{
        margin-left: 0;
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 0cm;
    }

    body{
        position: relative;
    }

    /* FACURA */
    .contenedor_factura{
        font-size: 0.9em;
        width: 7cm!important;
        padding-top: 15px; 
        padding-bottom: 15px; 
        position: abosulte;
    }

    .elemento{
        text-align: center;
    }

    .separador{
        padding: 0px;
        margin:0px;
    }

    .fono, .lp{
        font-size: 0.75em;
    }

    .txt_fo{
        margin-top:3px;
    }

    .detalle{
        border-top:dashed 1px black;
        border-bottom:dashed 1px black;
    }

    .act_eco{
        font-size: 0.73em;
    }

    .info1{
        text-align: center;
        font-weight: bold;
        font-size: 0.75em;
    }
    .info2{
        text-align: center;
        font-weight: bold;
        font-size: 0.7em;
    }

    .izquierda{
        text-align: left;
        padding-left: 5px; 
    }

    .derecha{
        text-align: right;
        padding-right: 5px; 
    }

    .informacion{
        padding: 5px;
        width: 100%;
    }

    .bold{
        font-weight: bold;
    }

    .cobro{
        width: 100%;
        padding: 5px;
    }

    .cobro table{
        width: 100%;
    }

    .centreado{
        text-align: center;
    }

    .cobro table tr td{
        font-size: 0.7em;
    }

    .literal{
        font-size: 0.7em;
    }

    .cod_control, .fecha_emision{
        font-size: 0.9em;
    }

    .cobro table{
        border-collapse: collapse;
    }

    .cobro table tr.punteado td{
        border-top:dashed 1px black;
        border-bottom:dashed 1px black;
    }
    
    .qr img{
        width: 160px;
        height: 160px;
    }

    .total{
        font-size: 0.9em!important;
    }

    </style>
</head>
<body>
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
</body>
</html>