<x-layout title="Historial de Compras">

<div class="container py-5">

    <div class="mb-5">
        <h2 class="purchase-title">
            <i class="bi bi-bag-check-fill me-2"></i>
            Mis Compras
        </h2>

        <p class="purchase-subtitle">
            Consultá el historial de todas tus compras realizadas en Nexcell.
        </p>
    </div>

    @if($compras->isEmpty())

        <div class="empty-purchases">

            <i class="bi bi-cart-x"></i>

            <h4>No realizaste ninguna compra todavía</h4>

            <p>
                Cuando compres productos en Nexcell aparecerán aquí.
            </p>

            <a href="{{ route('productos.index') }}"
               class="btn btn-warning">
                Explorar productos
            </a>

        </div>

    @else

        <div class="row">

            @foreach($compras as $compra)

                <div class="col-lg-6 mb-4">

                    <div class="card purchase-card">

                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <h5 class="fw-bold mb-0">
                                    Compra #{{ $compra->id }}
                                </h5>

                                <span class="purchase-status">
                                    Confirmada
                                </span>

                            </div>

                            <div class="purchase-date mb-2">
                                <i class="bi bi-calendar-event me-2"></i>
                                {{ $compra->fecha_venta?->format('d/m/Y H:i') }}
                            </div>

                            <div class="purchase-payment mb-3">
                                <i class="bi bi-credit-card me-2"></i>
                                {{ ucfirst($compra->metodo_pago) }}
                            </div>

                            <div class="purchase-price mb-4">
                                ${{ number_format($compra->total, 2, ',', '.') }}
                            </div>

                            <a href="{{ route('compras.detalle', $compra->id) }}"
                               class="btn btn-purchase-detail w-100">

                                <i class="bi bi-eye-fill me-2"></i>
                                Ver Detalle

                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    @endif

</div>

</x-layout>