<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espacios disponibles</title>
</head>

<body style="margin:0;padding:24px 10px;background:#f1f5f9;
             font-family:Arial,sans-serif;color:#243247;">

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">

                <table role="presentation" width="600" cellpadding="0" cellspacing="0"
                    style="width:100%;max-width:600px;background:#fff;">

                    <tr>
                        <td align="center" style="background:#142d4e;padding:28px;color:#fff;">
                            <div style="font-size:32px;">&#128663;</div>
                            <h1 style="font-size:22px;margin:10px 0;">ESPACIOS DISPONIBLES</h1>
                            <p style="margin:0;color:#d8e5f5;">Información actualizada del parqueo</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:25px;">
                            <p>Estimado/a
                                <strong>{{ $datos['propietario']->nom }}
                                    {{ $datos['propietario']->apep ?? '' }}
                                    {{ $datos['propietario']->apem ?? '' }}</strong>:
                            </p>

                            <p style="line-height:1.7;color:#64748b;">
                                Le informamos que la disponibilidad del parqueo ha cambiado.
                                Actualmente se registra la siguiente cantidad de espacios libres.
                            </p>

                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                style="background:#e4f5e9;">
                                <tr>
                                    <td align="center" style="padding:28px 15px;">
                                        <div style="font-size:13px;font-weight:bold;color:#187746;">
                                            ESPACIOS DISPONIBLES
                                        </div>
                                        <div
                                            style="font-size:48px;font-weight:bold;color:#187746;
                            margin-top:8px;">
                                            {{ $datos['cantidad'] }}
                                        </div>
                                        <div style="font-size:13px;color:#187746;">
                                            {{ (int) $datos['cantidad'] === 1 ? 'espacio libre' : 'espacios libres' }}
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <p style="font-size:13px;line-height:1.6;color:#64748b;margin-top:24px;">
                                Esta información corresponde a la disponibilidad registrada en el
                                sistema y puede variar según los movimientos del parqueo.
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td align="center"
                            style="background:#142d4e;padding:20px;color:#d8e5f5;
                           font-size:12px;">
                            Sistema de Control Vehicular
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>

</html>
