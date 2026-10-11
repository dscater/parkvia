<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tarifas</title>
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
        <h4 class="texto">LISTA DE TARIFAS</h4>
        <h4 class="fecha">FECHA DE EMISIÓN: {{ date('d-m-Y') }}</h4>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th width="3.5%">Nro.</th>
                <th width="30%">Nombre</th>
                <th width="">Horas</th>
                <th width="">Precio</th>
                <th width="">Fecha de registro</th>
                <th width="25%">Descripción</th>
            </tr>
        </thead>
        <tbody>
        @if(count($tarifas)>0)
            @php   
                $contador = 1;
            @endphp
            @foreach($tarifas as $key => $value)
            <tr>
                <td>{{ $contador++ }}</td>
                <td class="izquierda">{{ $value->nom }}</td>
                <td>{{ $value->horas }}</td>
                <td>{{ $value->precio }}</td>
                <td>{{ $value->fecha_reg }}</td>
                <td>{{ $value->descripcion }}</td>
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