<x-layout title="Panel de Ventas">

<div class="admin-panel-container">

    {{-- HEADER --}}
    <div class="admin-header">

        <h1 class="admin-title">
            Gestión de Ventas
        </h1>

        <p class="admin-subtitle">
            Historial de compras confirmadas del sistema
        </p>

    </div>

    {{-- TABLA --}}
    <div class="admin-panel-card">

        <div class="admin-panel-top">

            <h3 class="admin-panel-heading">
                Ventas registradas
            </h3>

            <span class="admin-panel-count">
                {{ count($ventas) }} ventas
            </span>

        </div>

        <div class="table-responsive">

            <table class="admin-table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Pago</th>
                        <th>Ciudad</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($ventas as $venta)

                        <tr>

                            {{-- ID --}}
                            <td>
                                #{{ $venta->id }}
                            </td>

                            {{-- CLIENTE --}}
                            <td>
                                {{ $venta->usuario->nombre ?? 'Sin usuario' }}
                            </td>

                            {{-- FECHA --}}
                            <td>
                                {{ optional($venta->fecha_venta)->format('d/m/Y H:i') }}
                            </td>

                            {{-- TOTAL --}}
                            <td class="precio-col">
                                $ {{ number_format($venta->total, 0, ',', '.') }}
                            </td>

                            {{-- PAGO --}}
                            <td>
                                {{ ucfirst($venta->metodo_pago) }}
                            </td>

                            {{-- CIUDAD --}}
                            <td>
                                {{ $venta->ciudad }}
                            </td>

                            {{-- ESTADO --}}
                            <td>

                                @if($venta->estado === 'confirmado')

                                    <span class="status-badge success">
                                        Confirmada
                                    </span>

                                @else

                                    <span class="status-badge warning">
                                        {{ $venta->estado }}
                                    </span>

                                @endif

                            </td>

                            {{-- ACCIONES --}}
                            <td>

                                <a href="{{ route('admin.ventas.detalle', $venta->id) }}"
                                    class="btn-user-action warning">
                                        Ver detalle
                                </a>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="8" class="empty-table">
                                No hay ventas registradas.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-layout>