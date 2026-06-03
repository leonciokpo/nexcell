<x-layout title="Panel de Categorías">

    <div class="admin-panel-container">

        {{-- HEADER --}}
        <div class="admin-header">

            <h1 class="admin-title">
                Gestión de Categorías
            </h1>

            <p class="admin-subtitle">
                Administra las categorías disponibles en la tienda
            </p>

        </div>

        {{-- BUSCADOR + BOTON AGREGAR --}}
        <div class="admin-search-box d-flex justify-content-between align-items-center gap-3 flex-wrap">

            {{-- BOTON AGREGAR --}}
            <button
                class="dashboard-btn productos-btn"
                data-bs-toggle="modal"
                data-bs-target="#modalCategoria">

                <i class="bi bi-plus-circle"></i>
                Agregar Categoría

            </button>

            {{-- BUSCADOR --}}
            <div class="admin-search-group flex-grow-1">

                <i class="bi bi-search"></i>

                <input
                    type="text"
                    id="buscarCategoria"
                    placeholder="Buscar categoría...">

            </div>

        </div>

        {{-- TABLA --}}
        <div class="admin-panel-card">

            <div class="admin-panel-top">

                <h3 class="admin-panel-heading">
                    Categorías registradas
                </h3>

                <span class="admin-panel-count">
                    {{ count($categorias) }} categorías
                </span>

            </div>

            <div class="table-responsive">

                <table class="admin-table">

                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Productos</th>
                            <th>Acciones</th>
                        </tr>

                    </thead>

                    <tbody id="tablaCategorias">

                        @forelse($categorias as $categoria)

                            <tr>

                                <td>
                                    #{{ $categoria->id }}
                                </td>

                                <td class="nombre-categoria">
                                    {{ $categoria->nombre }}
                                </td>

                                <td>

                                    @if($categoria->productos_count > 0)

                                        <span class="status-badge success">
                                            {{ $categoria->productos_count }} productos
                                        </span>

                                    @else

                                        <span class="status-badge warning">
                                            Sin productos
                                        </span>

                                    @endif

                                </td>

                                <td>

                                    <div class="acciones-producto">

                                        <button
                                            class="btn-user-action warning">

                                            Editar

                                        </button>

                                        <button
                                            class="btn-user-action danger">

                                            Eliminar

                                        </button>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="4" class="empty-table">

                                    No hay categorías registradas.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    {{-- MODAL NUEVA CATEGORIA --}}
    <div class="modal fade" id="modalCategoria" tabindex="-1">

        <div class="modal-dialog">

            <div class="modal-content">

                <form method="POST" action="/admin/categorias">

                    @csrf

                    <div class="modal-header">

                        <h5 class="modal-title">
                            Nueva Categoría
                        </h5>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                        </button>

                    </div>

                    <div class="modal-body">

                        <input
                            type="text"
                            name="nombre"
                            class="form-control"
                            placeholder="Nombre de la categoría"
                            required>

                    </div>

                    <div class="modal-footer">

                        <button
                            type="submit"
                            class="dashboard-btn productos-btn">

                            Crear Categoría

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <script>

    document.getElementById('buscarCategoria')
    .addEventListener('keyup', function () {

        let valor = this.value.toLowerCase();

        document.querySelectorAll('#tablaCategorias tr')
        .forEach(fila => {

            let nombre = fila
                .querySelector('.nombre-categoria')
                ?.innerText
                .toLowerCase() || '';

            fila.style.display =
                nombre.includes(valor)
                    ? ''
                    : 'none';

        });

    });

    </script>

</x-layout>