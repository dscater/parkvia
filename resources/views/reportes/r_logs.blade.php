<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Logs Usuarios</title>
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
        <h4 class="texto">LISTA DE LOGS USUARIOS</h4>
        <h4 class="fecha">FECHA DE EMISIÓN: {{ date('d-m-Y') }}</h4>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th width="10%">Fecha</th>
                <th width="7%">Hora</th>
                <th width="10%">Usuario</th>
                <th>Acción</th>
                <th>Modulo</th>
                <th width="35%">Descripción</th>
            </tr>
        </thead>
        <tbody>
            @if (count($logs) > 0)
                @foreach ($logs as $key => $value)
                    <tr>
                        <td>{{ $value->fecha }}</td>
                        <td>{{ $value->hora }}</td>
                        <td>{{ $value->user->name }}</td>
                        <td>{{ $value->accion }}</td>
                        <td>{{ $value->modulo }}</td>
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
