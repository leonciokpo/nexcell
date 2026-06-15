<x-layout title="Productos">

<div class="container py-5">

    <div class="row">

        <!-- FILTROS -->
        <div class="col-lg-3 mb-4">

            <div class="filtros-box">

                <h4 class="filtros-titulo mb-4">
                    Filtros
                </h4>

                <!-- CATEGORIAS -->
                <div class="filtro-seccion mb-4">

                    <h5 class="filtro-subtitulo">
                        Categorías
                    </h5>

                    <div class="form-check">
                        <input class="form-check-input"
                            type="checkbox"
                            name="categorias[]"
                            value="Smartphones"
                            {{ in_array('Smartphones', (array) request('categorias', [])) ? 'checked' : '' }}>

                        <label class="form-check-label">
                            Smartphones
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input"
                        type="checkbox"
                        name="categorias[]"
                        value="Auriculares"
                        {{ in_array('Auriculares', (array) request('categorias', [])) ? 'checked' : '' }}>                     
                        <label class="form-check-label" for="Auriculares">
                            Auriculares
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input"
                            type="checkbox"
                            name="categorias[]"
                            value="Parlantes"
                            {{ in_array('Parlantes', (array) request('categorias', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="Parlantes">
                            Parlantes
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input"
                            type="checkbox"
                            name="categorias[]"
                            value="Smartwatch"
                            {{ in_array('Smartwatch', (array) request('categorias', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="Smartwatch">
                            Smartwatch
                        </label>
                    </div>

                </div>

                <!-- MARCAS -->
                <div class="filtro-seccion mb-4">

                    <h5 class="filtro-subtitulo">
                        Marcas
                    </h5>

                    <div class="form-check">
                        <input class="form-check-input"
                            type="checkbox"
                            name="marcas[]"
                            value="Apple"
                            {{ in_array('Apple', (array) request('marcas', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="Apple">
                            Apple
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input"
                            type="checkbox"
                            name="marcas[]"
                            value="Samsung"
                            {{ in_array('Samsung', (array) request('marcas', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="Samsung">
                            Samsung
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input"
                            type="checkbox"
                            name="marcas[]"
                            value="Motorola"
                            {{ in_array('Motorola', (array) request('marcas', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="Motorola">
                            Motorola
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input"
                            type="checkbox"
                            name="marcas[]"
                            value="Xiaomi"
                            {{ in_array('Xiaomi', (array) request('marcas', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="Xiaomi">
                            Xiaomi
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input"
                            type="checkbox"
                            name="marcas[]"
                            value="JBL"
                            {{ in_array('JBL', (array) request('marcas', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="JBL">
                            JBL
                        </label>
                    </div>

                </div>

                <!-- PRECIO -->
                <div class="filtro-seccion">

                    <h5 class="filtro-subtitulo">
                        Precio
                    </h5>

                    <div class="mb-3">
                        <label class="form-label">
                            Mínimo
                        </label>

                        <input type="number" name="min" class="form-control" value="{{ request('min') }}" placeholder="$ Mínimo">
                    </div>

                    <div>
                        <label class="form-label">
                            Máximo
                        </label>

                        <input type="number" name="max" class="form-control" value="{{ request('max') }}" placeholder="$ Máximo">
                    </div>

                </div>
            </div>

        </div>

        <!-- PRODUCTOS -->
        <div class="col-lg-9">

            <!-- TOP BAR -->
            <div class="d-flex justify-content-between align-items-center mb-4">

                <h2 class="productos-titulo">
                    Productos
                </h2>

                <!-- DROPDOWN ORDEN -->
                <div class="ordenar-box">

                    <span class="ordenar-label">
                        Ordenar por
                    </span>

                    <div class="dropdown">

                        <button
                            id="sortDropdownBtn"
                            class="btn-dropdown-order dropdown-toggle"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">

                            Destacados

                        </button>

                        <ul class="dropdown-menu dropdown-menu-end dropdown-order-menu">

                            <li>
                                <a class="dropdown-item sort-option active-sort"
                                data-sort="default"
                                data-label="Destacados"
                                href="#">

                                    Destacados

                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item sort-option"
                                data-sort="asc"
                                data-label="Menor a mayor precio"
                                href="#">

                                    Menor a mayor precio

                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item sort-option"
                                data-sort="desc"
                                data-label="Mayor a menor precio"
                                href="#">

                                    Mayor a menor precio

                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

            <!-- GRID PRODUCTOS -->
            <div class="row g-4" id="productos-grid">
                @include('frontend.productos.partials.grid')
            </div>

        </div>

    </div>

</div>

</x-layout>