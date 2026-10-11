<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cobros</title>
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
        <h4 class="texto">LISTA DE COBROS</h4>
        <h4 class="fecha">FECHA DE EMISIÓN: {{ date('d-m-Y') }}</h4>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th width="3.5%">Nro.</th>
                <th width="20%">Vehículo</th>
                <th width="">Propietario</th>
                <th width="">Tarifa</th>
                <th width="">Tiempo cobrado (Hrs.)</th>
                <th width="">Fecha y hora</th>
                <th width="">Total</th>
            </tr>
        </thead>
        <tbody>
        @if(count($cobros)>0)
            @php   
                $contador = 1;
                $total = 0;
            @endphp
            @foreach($cobros as $key => $value)
            <tr>
                <td>{{ $contador++ }}</td>
                <td class="izquierda">{{ $value->vehiculo->nom }}</td>
                <td>{{ $value->vehiculo->propietario->nom }} {{ $value->vehiculo->propietario->apep }} {{ $value->vehiculo->propietario->apem }}</td>
                <td>{{ $value->tarifa->nom }}</td>
                <td>{{ $value->tiempo_cobrado }}</td>
                <td>{{ $value->fecha_reg }} {{$value->hora}}</td>
                <td>{{ $value->total }}</td>
            </tr>
            @php
                $total = $total + $value->total;
            @endphp
            @endforeach
            <tr>
                <td colspan="6" class="derecha bold">
                    TOTAL
                </td>
                <td>
                    {{number_format($total,2,".",",")}}
                </td>
            </tr>
        @else
            <tr>
                <td colspan="7">NO SE ENCONTRARON REGISTROS</td>
            </tr>
        @endif
        </tbody>
    </table>
</body>
</html>