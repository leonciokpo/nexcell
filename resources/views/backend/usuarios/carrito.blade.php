<x-layout title="Carrito de compras">

    <div class="carrito-container">

        <div class="carrito-header">
            <h1>Mi carrito</h1>
            <p>Productos agregados a tu compra</p>
        </div>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert-error">
                {{ session('error') }}
            </div>
        @endif

        @if($items->count() > 0)

            <div class="carrito-grid">

                {{-- PRODUCTOS --}}
                <div class="carrito-productos">

                    @foreach($items as $item)

                        <div class="carrito-item">

                            <div class="item-img">
                                <img src="{{ asset('storage/' . $item->producto->imagen) }}"
                                     alt="{{ $item->producto->nombre }}">
                            </div>

                            <div class="item-info">
                                <h3>{{ $item->producto->nombre }}</h3>

                                <p>
                                    Cantidad:
                                    <strong>{{ $item->cantidad }}</strong>
                                </p>

                                <p>
                                    Precio unitario:
                                    <strong>
                                        ${{ number_format($item->precio_unitario, 2) }}
                                    </strong>
                                </p>
                            </div>

                            <div class="item-actions">

                                <h3>
                                    ${{ number_format($item->subtotal, 2) }}
                                </h3>

                                <form method="POST"
                                      action="{{ route('carrito.eliminar', $item->id) }}">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn-delete">
                                        Eliminar
                                    </button>
                                </form>

                            </div>

                        </div>

                    @endforeach

                </div>

                {{-- RESUMEN --}}
                <div class="carrito-resumen">

                    <h2>Resumen</h2>

                    <div class="resumen-linea">
                        <span>Total</span>

                        <strong>
                            ${{ number_format($carrito->total, 2) }}
                        </strong>
                    </div>

                    <form method="POST"
                          action="{{ route('carrito.confirmar') }}">

                        @csrf

                        <button type="submit" class="btn-confirmar">
                            Confirmar compra
                        </button>

                    </form>

                </div>

            </div>

        @else

            <div class="carrito-vacio">

                <h2>Tu carrito está vacío</h2>

                <p>
                    Agregá productos para comenzar tu compra.
                </p>

                <a href="{{ route('principal') }}" class="btn-volver">
                    Ver productos
                </a>

            </div>

        @endif

    </div>

</x-layout>