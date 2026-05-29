<x-layout title="Panel de Productos">

<div class="admin-panel-container">

    {{-- HEADER --}}
    <div class="admin-header">

        <h1 class="admin-title">
            Gestión de Productos
        </h1>

        <p class="admin-subtitle">
            Administra el catálogo completo de productos de Nexcell
        </p>

    </div>

    {{-- BUSCADOR + BOTON AGREGAR --}}
    <div class="admin-search-box d-flex justify-content-between align-items-center gap-3 flex-wrap">

        {{-- BOTON AGREGAR --}}
        <a href="/admin/productos/agregar"
        class="dashboard-btn productos-btn">

            <i class="bi bi-plus-circle"></i>
            Agregar Producto

        </a>

        {{-- BUSCADOR --}}
        <form method="GET"
            action="/admin/productos"
            class="flex-grow-1">

            <div class="admin-search-group">

                <i class="bi bi-search"></i>

                <input type="text"
                    name="buscar"
                    placeholder="Buscar producto..."
                    value="{{ request('buscar') }}">

                <button type="submit">
                    Buscar
                </button>

            </div>

        </form>

    </div>

    {{-- TABLA --}}
    <div class="admin-panel-card">

        <div class="admin-panel-top">

            <h3 class="admin-panel-heading">
                Productos registrados
            </h3>

            <span class="admin-panel-count">
                {{ count($productos) }} productos
            </span>

        </div>

        <div class="table-responsive">

            <table class="admin-table">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Categoría</th>
                        <th>Marca</th>
                        <th>Destacado</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($productos as $producto)

                        <tr>

                            {{-- ID --}}
                            <td>
                                #{{ $producto->id }}
                            </td>

                            {{-- IMAGEN --}}
                            <td>

                                <img src="{{ asset($producto->imagenes->first()->ruta ?? 'images/default.png') }}"
                                     alt="{{ $producto->nombre }}"
                                     width="70"
                                     height="70"
                                     style="object-fit: cover; border-radius: 12px;">

                            </td>

                            {{-- NOMBRE --}}
                            <td>
                                {{ $producto->nombre }}
                            </td>

                            {{-- PRECIO --}}
                            <td class="precio-col">
                                $ {{ number_format($producto->precio, 0, ',', '.') }}
                            </td>

                            {{-- STOCK --}}
                            <td class="stock-col">

                                @if($producto->stock > 0)

                                    <span class="status-badge success">
                                        {{ $producto->stock }} unidades
                                    </span>

                                @else

                                    <span class="status-badge warning">
                                        Sin stock
                                    </span>

                                @endif

                            </td>

                            {{-- CATEGORIA --}}
                            <td>
                                {{ $producto->categoria->nombre ?? 'Sin categoría' }}
                            </td>

                            {{-- MARCA --}}
                            <td>
                                {{ $producto->marca->nombre ?? 'Sin marca' }}
                            </td>

                            {{-- DESTACADO --}}
                            <td>

                                @if($producto->destacado)

                                    <span class="admin-tag">
                                        Destacado
                                    </span>

                                @else

                                    <span class="user-status inactive">
                                        Normal
                                    </span>

                                @endif

                            </td>

                            {{-- ESTADO --}}
                            <td>

                                @if($producto->trashed())

                                    <span class="user-status inactive">
                                        Desactivado
                                    </span>

                                @else

                                    <span class="user-status active">
                                        Activo
                                    </span>

                                @endif

                            </td>

                            {{-- ACCIONES --}}
                            <td>
                                <div class="acciones-producto">

                                    {{-- EDITAR --}}
                                    <a href="/admin/productos/{{ $producto->id }}/editar"
                                    class="btn-user-action warning">

                                        Editar

                                    </a>

                                    {{-- ACTIVAR / DESACTIVAR --}}
                                    <form method="POST"
                                        action="/admin/productos/{{ $producto->id }}/estado">

                                        @csrf
                                        @method('PATCH')

                                        @if($producto->trashed())

                                            <button class="btn-user-action success">
                                                Activar
                                            </button>

                                        @else

                                            <button class="btn-user-action danger">
                                                Desactivar
                                            </button>

                                        @endif

                                    </form>

                                </div>
                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="10" class="empty-table">

                                No hay productos registrados.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-layout>