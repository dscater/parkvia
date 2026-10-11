<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>IngresosSalidas</title>
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
        <h4 class="texto">INGRESOS Y SALIDAS POR VEHÍCULO</h4>
        <h4 class="fecha">FECHA DE EMISIÓN: {{ date('d-m-Y') }}</h4>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>Propietario</th>
                <th width="8%">Placa</th>               
                <th>Vehiculo</th>
                <th width="12%">Fecha</th>
                <th width="8%">Hora Ingreso</th>
                <th width="8%">Hora Salida</th>
                <th>Observación</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ingresos as $key => $ingreso_salida)
        <tr>
            <td>{{ $ingreso_salida->vehiculo->propietario->nom }} {{ $ingreso_salida->vehiculo->propietario->apep }} </td>
            <td>{{ $ingreso_salida->vehiculo->placa }}</td>
            <td>{{ $ingreso_salida->vehiculo->nom }}</td>
            <td>{{ $ingreso_salida->fecha_reg }}</td>
            
            
            
            <td>{{ $ingreso_salida->hora }}</td>
            <td>{{ $array_salidas[$ingreso_salida->id] }}</td>
            <td>{{ $ingreso_salida->observacion }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>