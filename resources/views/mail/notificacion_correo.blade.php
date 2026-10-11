<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notificación</title>
    <style>
        html,
        body {
            color: black;
        }
    </style>
</head>

<body>
    <h1>Ingreso/Salida de vehículo</h1>
    <p>Sr(a). {{$datos["propietario"]->nom}} {{$datos["propietario"]->apep}} {{$datos["propietario"]->apem}} se registro un/una {{$datos["accion"]}} de su vehículo:</p>
    <p><strong>Placa: </strong> {{ $datos["vehiculo"]->placa }}</p>
    <p><strong>Modelo: </strong> {{ $datos["vehiculo"]->modelo }}</p>
    <p><strong>Fecha: </strong> {{ $datos["fecha"] }}</p>
    <p><strong>Hora: </strong> {{ $datos["hora"] }}</p>
    <p><strong>Tipo: </strong> {{ $datos["accion"] }}</p>
</body>

</html>
