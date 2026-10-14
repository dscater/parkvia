<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobante de cobro</title>
</head>

<body
    style="margin:0; padding:0; background:#f1f5f9;
             font-family:Arial,Helvetica,sans-serif; color:#243247;">

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f1f5f9; padding:25px 10px;">
        <tr>
            <td align="center">

                <table role="presentation" width="600" cellpadding="0" cellspacing="0"
                    style="width:100%; max-width:600px; background:#fff;">

                    <!-- ENCABEZADO -->
                    <tr>
                        <td align="center" style="background:#142d4e; padding:28px 20px;">
                            <div style="font-size:32px;">&#128203;</div>

                            <h1 style="margin:10px 0 0; color:#fff;
                                   font-size:23px;">
                                COMPROBANTE DE COBRO
                            </h1>

                            <p style="margin:8px 0 0; color:#d8e5f5;
                                  font-size:13px;">
                                Control vehicular
                            </p>
                        </td>
                    </tr>

                    <!-- INTRODUCCIÓN -->
                    <tr>
                        <td style="padding:25px 25px 15px;">
                            <h2
                                style="margin:0 0 12px; color:#142d4e;
                                   font-size:20px;">
                                Detalle de su cobro
                            </h2>

                            <p
                                style="margin:0; font-size:14px;
                                  line-height:1.7; color:#64748b;">
                                Estimado/a
                                <strong>
                                    {{ trim(
                                        ($datos['propietario']->nom ?? '') .
                                            ' ' .
                                            ($datos['propietario']->apep ?? '') .
                                            ' ' .
                                            ($datos['propietario']->apem ?? ''),
                                    ) }}
                                </strong>:
                            </p>

                            <p
                                style="font-size:14px; line-height:1.7;
                                  color:#64748b;">
                                Le presentamos el detalle de permanencia
                                de su vehículo y el importe correspondiente
                                al cobro de salida.
                            </p>
                        </td>
                    </tr>

                    <!-- VEHÍCULO -->
                    <tr>
                        <td style="padding:10px 25px 20px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                style="border:1px solid #e2e8f0;">
                                <tr>
                                    <td style="padding:18px;">
                                        <div
                                            style="font-size:12px;
                                                color:#64748b;">
                                            PLACA DEL VEHÍCULO
                                        </div>

                                        <div
                                            style="font-size:23px;
                                                font-weight:bold;
                                                color:#142d4e;
                                                margin-top:7px;">
                                            {{ $datos['vehiculo']->placa }}
                                        </div>

                                        <div
                                            style="font-size:14px;
                                                color:#64748b;
                                                margin-top:5px;">
                                            Modelo:
                                            {{ $datos['vehiculo']->modelo ?: 'No especificado' }}
                                        </div>
                                    </td>
                                </tr>

                                {{-- <tr>
                                    <td
                                        style="padding:14px 18px;
                                           border-top:1px solid #e2e8f0;">
                                        <div
                                            style="font-size:12px;
                                                color:#64748b;">
                                            UBICACIÓN DEL VEHÍCULO
                                        </div>

                                        <div
                                            style="font-size:15px;
                                                font-weight:bold;
                                                margin-top:7px;">
                                            Sección:
                                            {{ $datos['seccion'] }}
                                        </div>

                                        <div
                                            style="font-size:15px;
                                                margin-top:5px;">
                                            Espacio asignado:
                                            {{ $datos['espacio'] }}
                                        </div>
                                    </td>
                                </tr> --}}
                            </table>
                        </td>
                    </tr>

                    <!-- PERMANENCIA -->
                    <tr>
                        <td style="padding:0 25px 20px;">
                            <h3
                                style="margin:0 0 12px; font-size:16px;
                                   color:#142d4e;">
                                Detalle de permanencia
                            </h3>

                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                style="border:1px solid #e2e8f0;">

                                <tr>
                                    <td colspan="2"
                                        style="padding:13px;
                                           background:#e4f5e9;
                                           color:#187746;
                                           font-weight:bold;">
                                        &#8594; INGRESO
                                    </td>
                                </tr>

                                <tr>
                                    <td width="50%" style="padding:13px;">
                                        <div
                                            style="font-size:12px;
                                                color:#64748b;">
                                            FECHA DE INGRESO
                                        </div>
                                        <div
                                            style="font-size:14px;
                                                font-weight:bold;
                                                margin-top:6px;">
                                            {{ $datos['fecha_ingreso'] }}
                                        </div>
                                    </td>

                                    <td width="50%" style="padding:13px;">
                                        <div
                                            style="font-size:12px;
                                                color:#64748b;">
                                            HORA DE INGRESO
                                        </div>
                                        <div
                                            style="font-size:14px;
                                                font-weight:bold;
                                                margin-top:6px;">
                                            {{ $datos['hora_ingreso'] }}
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2"
                                        style="padding:13px;
                                           background:#fde8e8;
                                           color:#b42332;
                                           font-weight:bold;">
                                        &#8594; SALIDA
                                    </td>
                                </tr>

                                <tr>
                                    <td width="50%" style="padding:13px;">
                                        <div
                                            style="font-size:12px;
                                                color:#64748b;">
                                            FECHA DE SALIDA
                                        </div>
                                        <div
                                            style="font-size:14px;
                                                font-weight:bold;
                                                margin-top:6px;">
                                            {{ $datos['fecha_salida'] }}
                                        </div>
                                    </td>

                                    <td width="50%" style="padding:13px;">
                                        <div
                                            style="font-size:12px;
                                                color:#64748b;">
                                            HORA DE SALIDA
                                        </div>
                                        <div
                                            style="font-size:14px;
                                                font-weight:bold;
                                                margin-top:6px;">
                                            {{ $datos['hora_salida'] }}
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2"
                                        style="padding:15px;
                                           border-top:1px solid #e2e8f0;">
                                        <div
                                            style="font-size:12px;
                                                color:#64748b;">
                                            TIEMPO COBRADO
                                        </div>

                                        <div
                                            style="font-size:17px;
                                                font-weight:bold;
                                                color:#142d4e;
                                                margin-top:6px;">
                                            {{ $datos['tiempo_cobrado'] }} horas
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- TOTAL DESTACADO -->
                    <tr>
                        <td style="padding:0 25px 25px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                style="background:#e4f5e9;">
                                <tr>
                                    <td align="center" style="padding:25px 15px;">
                                        <div
                                            style="font-size:13px;
                                                font-weight:bold;
                                                color:#187746;">
                                            TOTAL DEL COBRO
                                        </div>

                                        <div
                                            style="font-size:34px;
                                                font-weight:bold;
                                                color:#187746;
                                                margin-top:8px;">
                                            Bs.
                                            {{ number_format((float) $datos['total'], 2, ',', '.') }}
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- FACTURACIÓN -->
                    @if (!empty($datos['a_nombre']) || !empty($datos['nit']))
                        <tr>
                            <td style="padding:0 25px 25px;">
                                <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                    style="background:#f8fafc;
                                          border:1px solid #e2e8f0;">
                                    <tr>
                                        <td style="padding:16px;">
                                            <h3
                                                style="margin:0 0 12px;
                                                   font-size:15px;
                                                   color:#142d4e;">
                                                Datos de facturación
                                            </h3>

                                            <p
                                                style="margin:6px 0;
                                                  font-size:13px;">
                                                <strong>A nombre de:</strong>
                                                {{ $datos['a_nombre'] ?: '-' }}
                                            </p>

                                            <p
                                                style="margin:6px 0;
                                                  font-size:13px;">
                                                <strong>NIT/C.I.:</strong>
                                                {{ $datos['nit'] ?: '-' }}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    @endif

                    <!-- PIE -->
                    <tr>
                        <td align="center" style="background:#142d4e; padding:22px 18px;">
                            <p
                                style="margin:0 0 8px; color:#fff;
                                  font-size:14px; font-weight:bold;">
                                Sistema de Control Vehicular
                            </p>

                            <p
                                style="margin:0; color:#d8e5f5;
                                  font-size:12px; line-height:1.6;">
                                Notificación automática del cobro realizado.
                                Este correo no requiere respuesta.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>

</html>
