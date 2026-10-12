<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Kardex</title>
    <link rel="stylesheet" href="{{ asset('css/reportes.css') }}">
    <style type="text/css">
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            margin-top: 40px;
        }

        table thead tr th,
        tbody tr td {
            text-align: center;
            font-size: 0.63em;
            padding-top: 6px;
            padding-right: 6px;
            padding-bottom: 6px;
        }

        table thead tr th {
            font-size: 0.8em;
        }

        td.foto {
            padding: 0px;
        }

        td.foto img {
            height: 110px;
        }

        .logo img {
            height: 130px;
        }

        .izquierda {
            text-align: left;
            padding-left: 5px;
        }

        .bold {
            font-weight: bold;
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
        <h4 class="texto">KARDEX DE VEHÍCULO</h4>
        <h4 class="fecha">FECHA DE EMISIÓN: {{ date('d-m-Y') }}</h4>
    </div>
    <table border="1">
        <tbody>
            <tr>
                <td class="izquierda bold" width="20%">NOMBRE:</td>
                <td class="izquierda" width="35%">
                    {{ $vehiculo->nom }}
                </td>
                <td colspan="2" rowspan="4"class="foto">
                    <img src="{{ $vehiculo->foto_b64 }}" alt="">
                </td>
            </tr>
            <tr>
                <td class="izquierda bold">MARCA:</td>
                <td class="izquierda">
                    {{ $vehiculo->marca }}
                </td>
            </tr>
            <tr>
                <td class="izquierda bold">MODELO:</td>
                <td class="izquierda">
                    {{ $vehiculo->modelo }}
                </td>
            </tr>
            <tr>
                <td class="izquierda bold">TIPO:</td>
                <td class="izquierda">
                    {{ $vehiculo->tipo->nom }}
                </td>
            </tr>
            <tr>
                <td class="izquierda bold">TARIFA:</td>
                <td class="izquierda">
                    {{ $vehiculo->tarifa->nom }}
                </td>
                <td class="izquierda bold" width="15%">PROPIETARIO:</td>
                <td class="izquierda">
                    {{ $vehiculo->propietario->nom }} {{ $vehiculo->propietario->apep }}
                    {{ $vehiculo->propietario->apem }}
                </td>
            </tr>
            <tr>
                <td class="izquierda bold">FECHA DE REGISTRO:</td>
                <td colspan="3" class="izquierda">
                    {{ date('d/m/Y', strtotime($vehiculo->fecha_reg)) }}
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
