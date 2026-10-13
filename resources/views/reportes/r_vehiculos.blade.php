<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Vehiculos</title>
    <link rel="stylesheet" href="{{ asset('css/reportes.css') }}">
    <style type="text/css">
        @page {
            font-family: Arial, Helvetica, sans-serif;
        }

        .logo img {
            height: 130px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            margin-top: 20px;
        }

        table thead tr th,
        tbody tr td {
            text-align: center;
            font-size: 0.63em;
        }

        table thead tr th {
            font-size: 0.8em;
        }

        table thead tr th,
        tbody tr td img {
            max-width: 100%;
        }
    </style>
</head>

<body>
    <div class="encabezado">
        <div class="logo">
            <img src="{{ $empresa->logo_b64 }}">
        </div>
        <h2 class="titulo">
            {{ $empresa->name }}
        </h2>
        <h4 class="texto">LISTA DE VEHICULOS</h4>
        <h4 class="fecha">FECHA DE EMISIÓN: {{ date('d-m-Y') }}</h4>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th width="3.5%">Nro.</th>
                <th width="15%">Propietario</th>
                <th width="15%">Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Tipo</th>
                <th>Tarifa</th>
                <th width="10%">Foto</th>
                <th>Rfid</th>
                <th>Fecha de registro</th>
            </tr>
        </thead>
        <tbody>
            @if (count($vehiculos) > 0)
                @php
                    $contador = 1;
                @endphp
                @foreach ($vehiculos as $key => $value)
                    <tr>
                        <td>{{ $contador++ }}</td>
                        <td>{{ $value->propietario->nom }} {{ $value->propietario->apep }}
                            {{ $value->propietario->apem }}</td>
                        <td>{{ $value->nom }}</td>
                        <td>{{ $value->marca }}</td>
                        <td>{{ $value->modelo }}</td>
                        <td>{{ $value->tipo->nom }}</td>
                        <td>{{ $value->tarifa->nom }}</td>
                        <td>
                            <img src="{{ $value->foto_b64 }}" height="35px" alt="">
                        </td>
                        <td>{{ $value->rfid }}</td>
                        <td>{{ $value->fecha_reg }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="9">NO SE ENCONTRARON REGISTROS</td>
                </tr>
            @endif
        </tbody>
    </table>
</body>

</html>
