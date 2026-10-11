<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Salidas</title>
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
        <h4 class="texto">LISTA DE SALIDAS DE VEHÍCULOS</h4>
        <h4 class="fecha">FECHA DE EMISIÓN: {{ date('d-m-Y') }}</h4>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th width="3.5%">Nro.</th>
                <th width="25%">Vehículo</th>
                <th>Propietario</th>
                <th width="15%">Fecha</th>
                <th width="15%">Hora</th>
            </tr>
        </thead>
        <tbody>
        @if(count($salidas)>0)
            @php   
                $contador = 1;
            @endphp
            @foreach($salidas as $key => $value)
            <tr>
                <td>{{ $contador++ }}</td>
                <td class="izquierda">{{ $value->vehiculo }}</td>
                <td class="izquierda">{{ $value->nom }} {{ $value->apep }} {{ $value->apem }}</td>
                <td>{{ $value->fecha_reg }}</td>
                <td>{{ $value->hora }}</td>
            </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5">NO SE ENCONTRARON REGISTROS</td>
            </tr>
        @endif
        </tbody>
    </table>
</body>
</html>