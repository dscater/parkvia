<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ubicaciones</title>
    <link rel="stylesheet" href="{{asset('css/reportes.css')}}">
    <style type="text/css">
        table{
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            margin-top:20px;
        }

        table thead tr th, tbody tr td{
            text-align: center;
            font-size: 0.63em;
        }
    
        table thead tr th{
            font-size: 0.8em;
        }
    </style>
</head>
<body>
    <div class="encabezado">
        <div class="logo">
            <img src="{{ asset('imgs/empresa/'.$empresa->logo) }}">
        </div>
        <h2 class="titulo">
            {{ $empresa->name }}
        </h2>
        <h4 class="texto">LISTA DE UBICACIONES DISPONIBLES</h4>
        <h4 class="fecha">FECHA DE EMISIÓN: {{ date('d-m-Y') }}</h4>
    </div>
    <table border="1">
        <tbody>
        @if(count($secciones)>0)
            @php   
                $contador = 1;
            @endphp
            @foreach($secciones as $key => $value)
            <tr>
                <td class="centreado bold font1" colspan="2">
                    {{$value->nom}}
                </td>
            </tr>
            <tr>
                <td class="centreado bold">DISPONIBLES ({{$cont_disponibles[$value->id]}})</td>
                <td class="centreado bold">OCUPADOS ({{$cont_ocupados[$value->id]}})</td>
            </tr>
            <tr>
                <td class="izquierda lista">
                    @if(count($disponibles[$value->id]) > 0)
                    <ul>
                    @foreach($disponibles[$value->id] as $disp)
                        <li>{{$disp->nom}}</li>
                    @endforeach
                    </ul>
                    @endif
                </td>
                <td class="izquierda lista">
                    @if(count($ocupados[$value->id]) > 0)
                    <ul>
                    @foreach($ocupados[$value->id] as $disp)
                        <li>{{$disp->nom}}  -  {{$disp->vehiculo->nom}}</li>
                    @endforeach
                    </ul>
                    @endif
                </td>
            </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6">NO SE ENCONTRARON REGISTROS</td>
            </tr>
        @endif
        </tbody>
    </table>
</body>
</html>