<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recordatorio de salida mensual</title>
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
                            <h1 style="font-size:22px;margin:10px 0;">RECORDATORIO DE SALIDA</h1>
                            <p style="margin:0;color:#d8e5f5;">Salida mensual programada</p>
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
                                Le recordamos que la salida mensual de su vehículo está programada
                                para dentro de dos días. Le recomendamos tomar las previsiones
                                necesarias para retirar su vehículo en la fecha indicada.
                            </p>

                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                style="border:1px solid #e2e8f0;">
                                <tr>
                                    <td style="padding:16px;">
                                        <div style="font-size:12px;color:#64748b;">PLACA</div>
                                        <div style="font-size:24px;font-weight:bold;margin-top:6px;">
                                            {{ $datos['vehiculo']->placa }}
                                        </div>
                                        <div style="margin-top:8px;">
                                            Modelo: {{ $datos['vehiculo']->modelo ?? 'No especificado' }}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:16px;border-top:1px solid #e2e8f0;">
                                        <div style="font-size:12px;color:#64748b;">SECCIÓN</div>
                                        <div style="font-weight:bold;margin-top:6px;">
                                            {{ $datos['seccion'] }}
                                        </div>
                                        <div style="font-size:12px;color:#64748b;margin-top:12px;">
                                            ESPACIO ASIGNADO
                                        </div>
                                        <div style="font-weight:bold;margin-top:6px;">
                                            {{ $datos['espacio'] }}
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:18px;background:#fff4db;border-top:1px solid #e2e8f0;">
                                        <div style="font-size:12px;color:#8a5b00;">FECHA PROGRAMADA</div>
                                        <div
                                            style="font-size:21px;font-weight:bold;color:#8a5b00;
                            margin-top:7px;">
                                            {{ \Illuminate\Support\Carbon::parse($datos['fecha_salida'])->format('d/m/Y') }}
                                        </div>
                                        <div style="margin-top:8px;">
                                            Hora: {{ $datos['hora_salida'] }}
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            @if (!empty($datos['observacion']))
                                <p style="line-height:1.6;">
                                    <strong>Observación:</strong> {{ $datos['observacion'] }}
                                </p>
                            @endif

                            <p style="font-size:13px;line-height:1.6;color:#64748b;margin-top:24px;">
                                Este mensaje es una notificación automática del sistema de control
                                vehicular. Si ya coordinó su salida, puede ignorar este recordatorio.
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
