<x-layout title="Detalle de Venta">

    <div class="admin-panel-container">

        {{-- HEADER --}}
        <div class="admin-header">

            <h1 class="admin-title">
                Venta #{{ $venta->id }}
            </h1>

            <p class="admin-subtitle">
                Detalle completo de la compra
            </p>

        </div>

        {{-- INFO GENERAL --}}
        <div class="admin-panel-card">

            <div class="admin-panel-top">
                <h3 class="admin-panel-heading">
                    Información de la venta
                </h3>
            </div>

            <div class="p-3 text-white">

                <p><strong>Cliente:</strong> {{ $venta->usuario->nombre ?? 'Sin usuario' }}</p>
                <p><strong>Fecha:</strong> {{ $venta->fecha_venta?->format('d/m/Y H:i') }}</p>
                <p><strong>Estado:</strong> {{ ucfirst($venta->estado) }}</p>
                <p><strong>Método de pago:</strong> {{ ucfirst($venta->metodo_pago) }}</p>
                <p><strong>Total:</strong> ${{ number_format($venta->total, 0, ',', '.') }}</p>

            </div>

        </div>

        {{-- DIRECCIÓN --}}
        <div class="admin-panel-card mt-4">

            <div class="admin-panel-top">
                <h3 class="admin-panel-heading">
                    Dirección de envío
                </h3>
            </div>

            <div class="p-3 text-white">

                <p>{{ $venta->calle }} {{ $venta->numero }}</p>
                <p>{{ $venta->barrio }}</p>
                <p>{{ $venta->ciudad }}, {{ $venta->provincia }}</p>
                <p>CP: {{ $venta->codigo_postal }}</p>

            </div>

        </div>

        {{-- PRODUCTOS --}}
        <div class="admin-panel-card mt-4">

            <div class="admin-panel-top">
                <h3 class="admin-panel-heading">
                    Productos comprados
                </h3>
            </div>

            <div class="table-responsive">

                <table class="admin-table">

                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($venta->detalles as $item)

                            <tr>
                                <td>{{ $item->producto->nombre }}</td>
                                <td>{{ $item->cantidad }}</td>
                                <td>${{ number_format($item->precio_unitario, 0, ',', '.') }}</td>
                                <td>${{ number_format($item->subtotal, 0, ',', '.') }}</td>
                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</x-layout>