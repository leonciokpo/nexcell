<x-layout title="Detalle de Compra">

<div class="container py-5">

    <div class="purchase-detail-header">

        <div class="d-flex justify-content-between align-items-center flex-wrap">

            <div>

                <h2>
                    Compra #{{ $compra->id }}
                </h2>

                <p class="mb-0 mt-2">
                    {{ $compra->fecha_venta?->format('d/m/Y H:i') }}
                </p>

            </div>

            <div class="text-end">

                <span class="purchase-status">
                    Confirmada
                </span>

                <div class="purchase-total mt-2">
                    ${{ number_format($compra->total, 2, ',', '.') }}
                </div>

            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-lg-8 mb-4">

            <div class="card purchase-products-card">

                <div class="card-header">

                    <i class="bi bi-box-seam me-2"></i>
                    Productos Comprados

                </div>

                <div class="card-body">

    <div class="productos-scroll">

        @foreach($compra->detalles as $item)

            <div class="product-row">

                <div>

                    <div class="product-name">
                        {{ $item->producto->nombre }}
                    </div>

                    <div class="product-qty">
                        Cantidad: {{ $item->cantidad }}
                    </div>

                </div>

                <div class="text-end">

                    <div>
                        ${{ number_format($item->precio_unitario, 2, ',', '.') }}
                    </div>

                    <div class="product-subtotal">
                        ${{ number_format($item->subtotal, 2, ',', '.') }}
                    </div>

                </div>

            </div>

        @endforeach

    </div>

</div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card purchase-info-card">

                <div class="card-header">

                    <i class="bi bi-truck me-2"></i>
                    Información de Envío

                </div>

                <div class="card-body">

                    <p>
                        <strong>Método de Pago</strong><br>
                        {{ ucfirst($compra->metodo_pago) }}
                    </p>

                    <hr>

                    <p>
                        <strong>Dirección</strong><br>

                        {{ $compra->calle }}
                        {{ $compra->numero }}<br>

                        {{ $compra->barrio }}<br>

                        {{ $compra->ciudad }}<br>

                        {{ $compra->provincia }}
                    </p>

                    @if($compra->codigo_postal)

                        <hr>

                        <p class="mb-0">
                            <strong>Código Postal</strong><br>
                            {{ $compra->codigo_postal }}
                        </p>

                    @endif

                </div>

            </div>

            <a href="{{ route('compras.historial') }}"
               class="btn btn-outline-dark btn-back-history w-100 mt-3">

                <i class="bi bi-arrow-left me-2"></i>
                Volver al Historial

            </a>

        </div>

    </div>

</div>

</x-layout>