<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comprobante #{{ str_pad($compra->id, 6, '0', STR_PAD_LEFT) }}</title>
    <link rel="stylesheet" href="{{ public_path('estilos/pdf.css') }}">
</head>
<body>
    <div class="container">
        <table class="header">
            <tr>
                <td class="logo">Nex<span>cell.</span></td>
                <td class="company-info">
                    <strong>Nexcell Store</strong><br>
                    Corrientes, Argentina<br>
                    nexcell@gmail.com
                </td>
            </tr>
        </table>

        <table class="invoice-details">
            <tr>
                <td style="width: 50%;">
                    <div class="client-box">
                        <h3>Datos del Cliente</h3>
                        <strong>{{ $usuario->nombre }}</strong><br>
                        {{ $usuario->email }}
                    </div>
                </td>
                <td style="width: 50%;" class="meta-box">
                    <table>
                        <tr>
                            <td><strong>Comprobante N°:</strong></td>
                            <td class="text-right">#{{ str_pad($compra->id, 6, '0', STR_PAD_LEFT) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Fecha de Emisión:</strong></td>
                            <td class="text-right">{{ $compra->fecha_venta }}</td>
                        </tr>
                        <tr>
                            <td><strong>Condición:</strong></td>
                            <td class="text-right">Venta Contado</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table class="table-items">
            <thead>
                <tr>
                    <th style="width: 45%;">Descripción del Producto</th>
                    <th style="width: 15%;" class="text-center">Cant.</th>
                    <th style="width: 20%;" class="text-right">Precio Unit.</th>
                    <th style="width: 20%;" class="text-right">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($detalles as $item)
                    <tr>
                        <td>{{ $item->producto->nombre }}</td>
                        <td class="text-center">{{ $item->cantidad }}</td>
                        <td class="text-right">${{ number_format($item->precio, 2, ',', '.') }}</td>
                        <td class="text-right">${{ number_format($item->precio * $item->cantidad, 2, ',', '.') }}</td>
                    </tr>
                @endforeach
                
                <tr class="total-row">
                    <td colspan="3" class="text-right">TOTAL ABONADO</td>
                    <td class="text-right total-amount">${{ number_format($compra->total, 2, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="footer">
        Documento generado automáticamente por el sistema de ventas de Nexcell.<br>
        Este comprobante es de carácter informativo y no es válido como factura fiscal oficial.
    </div>
</body>
</html>