<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
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
        <h4 class="texto">LISTA DE USUARIOS</h4>
        <h4 class="fecha">FECHA DE EMISIÓN: {{ date('d-m-Y') }}</h4>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th width="3.5%">Nro.</th>
                <th width="10%">Código de registro</th>
                <th width="30%">Nombre</th>
                <th width="10%">C.I.</th>
                <th>Tel./Cel.</th>
                <th>Tipo usuario</th>
            </tr>
        </thead>
        <tbody>
        @if(count($usuarios)>0)
            @php   
                $contador = 1;
            @endphp
            @foreach($usuarios as $key => $value)
            <tr>
                <td>{{ $contador++ }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->nom }} {{ $value->apep }} {{ $value->apem }}</td>
                <td>{{ $value->ci }} {{ $value->ci_exp }}</td>
                <td>{{ $value->fono? :'S/N' }} / {{ $value->cel? :'S/N' }}</td>
                <td>{{ $value->tipo }}</td>
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