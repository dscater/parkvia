<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificación vehicular</title>
</head>

<body
    style="margin:0; padding:0; background-color:#f1f5f9;
             font-family:Arial,Helvetica,sans-serif; color:#243247;">

    @php
        $esIngreso = strtolower($datos['accion']) === 'ingreso';

        $color = $esIngreso ? '#198754' : '#dc3545';
        $fondo = $esIngreso ? '#e4f5e9' : '#fde8e8';

        $tituloAccion = $esIngreso ? 'INGRESO REGISTRADO' : 'SALIDA REGISTRADA';

        $nombreCompleto = trim(
            ($datos['propietario']->nom ?? '') .
                ' ' .
                ($datos['propietario']->apep ?? '') .
                ' ' .
                ($datos['propietario']->apem ?? ''),
        );
    @endphp

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
        style="background-color:#f1f5f9; padding:24px 10px;">
        <tr>
            <td align="center">

                <table role="presentation" width="600" cellpadding="0" cellspacing="0" border="0"
                    style="width:100%; max-width:600px; background:#ffffff;
                              border-radius:12px; overflow:hidden;">

                    <!-- Encabezado -->
                    <tr>
                        <td align="center" style="background:#142d4e; padding:30px 20px;">
                            <div style="font-size:34px; margin-bottom:10px;">
                                &#128663;
                            </div>

                            <h1 style="margin:0; color:#ffffff;
                                       font-size:23px;">
                                CONTROL VEHICULAR
                            </h1>

                            <p
                                style="margin:8px 0 0; color:#d8e5f5;
                                      font-size:14px;">
                                Notificación de movimiento
                            </p>
                        </td>
                    </tr>

                    <!-- Introducción -->
                    <tr>
                        <td style="padding:28px 25px 15px;">
                            <p style="margin:0 0 10px; font-size:15px;">
                                Estimado/a
                                <strong>{{ $nombreCompleto }}</strong>:
                            </p>

                            <h2
                                style="margin:0 0 10px; font-size:21px;
                                       color:#142d4e;">
                                ¡Movimiento registrado!
                            </h2>

                            <p
                                style="margin:0; color:#64748b;
                                      font-size:14px; line-height:1.7;">
                                Le informamos que se ha registrado un
                                movimiento de su vehículo en el sistema
                                de control vehicular.
                            </p>
                        </td>
                    </tr>

                    <!-- Estado -->
                    <tr>
                        <td style="padding:10px 25px 20px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                style="background:{{ $fondo }};
                                          border-radius:8px;">
                                <tr>
                                    <td align="center" style="padding:20px;">
                                        <p
                                            style="margin:0 0 6px;
                                                  font-size:13px;
                                                  color:{{ $color }};">
                                            ESTADO DEL MOVIMIENTO
                                        </p>

                                        <h2
                                            style="margin:0; font-size:22px;
                                                   color:{{ $color }};">
                                            {{ $tituloAccion }}
                                        </h2>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Datos del vehículo -->
                    <tr>
                        <td style="padding:0 25px 25px;">
                            <h3
                                style="margin:0 0 15px; font-size:16px;
                                       color:#142d4e;">
                                Datos del vehículo
                            </h3>

                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                style="border:1px solid #e2e8f0;
                                          border-radius:8px;">

                                <tr>
                                    <td
                                        style="padding:14px;
                                               border-bottom:1px solid #e2e8f0;">
                                        <div
                                            style="font-size:12px;
                                                    color:#64748b;">
                                            PLACA
                                        </div>
                                        <div
                                            style="font-size:20px;
                                                    font-weight:bold;
                                                    color:#142d4e;
                                                    margin-top:5px;">
                                            {{ $datos['vehiculo']->placa }}
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:14px; border-bottom:1px solid #e2e8f0;">
                                        <div style="font-size:12px; color:#64748b;">
                                            SECCIÓN
                                        </div>

                                        <div
                                            style="font-size:16px; font-weight:bold;
                    color:#142d4e; margin-top:6px;">
                                            {{ $datos['mapeo']?->ubicacion?->nom ?? 'No especificada' }}
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:14px;">
                                        <div style="font-size:12px; color:#64748b;">
                                            ESPACIO ASIGNADO
                                        </div>

                                        <div
                                            style="font-size:16px; font-weight:bold;
                    color:#142d4e; margin-top:6px;">
                                            {{ $datos['mapeo']?->nom ?? 'No especificado' }}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="padding:14px;
                                               border-bottom:1px solid #e2e8f0;">
                                        <div
                                            style="font-size:12px;
                                                    color:#64748b;">
                                            {{ $esIngreso ? 'LUGAR DE INGRESO' : 'LUGAR DE SALIDA' }}
                                        </div>
                                        <div
                                            style="font-size:16px;
                                                    font-weight:bold;
                                                    color:#142d4e;
                                                    margin-top:6px;">
                                            &#128205;
                                            {{ $datos['lugar'] }}
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:14px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td width="50%" valign="top">
                                                    <div
                                                        style="font-size:12px;
                                                                color:#64748b;">
                                                        FECHA
                                                    </div>
                                                    <div
                                                        style="font-size:15px;
                                                                font-weight:bold;
                                                                margin-top:6px;">
                                                        {{ $datos['fecha'] }}
                                                    </div>
                                                </td>

                                                <td width="50%" valign="top">
                                                    <div
                                                        style="font-size:12px;
                                                                color:#64748b;">
                                                        HORA
                                                    </div>
                                                    <div
                                                        style="font-size:15px;
                                                                font-weight:bold;
                                                                margin-top:6px;">
                                                        {{ $datos['hora'] }}
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                    <!-- Pie -->
                    <tr>
                        <td align="center" style="background:#142d4e; padding:22px 20px;">
                            <p
                                style="margin:0 0 7px; color:#ffffff;
                                      font-size:14px; font-weight:bold;">
                                Sistema de Control Vehicular
                            </p>

                            <p
                                style="margin:0; color:#d8e5f5;
                                      font-size:12px; line-height:1.6;">
                                Este correo es una notificación automática.
                                Por favor, no responda a este mensaje.
                            </p>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
