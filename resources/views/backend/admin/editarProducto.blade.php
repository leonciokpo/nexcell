<x-layout title="Editar Producto">

<div class="admin-panel-container">

    <div class="admin-header">

        <h1 class="admin-title">
            Editar Producto
        </h1>

        <p class="admin-subtitle">
            Modifica la información del producto
        </p>

    </div>

    <div class="admin-panel-card p-4">

        <form method="POST"
            action="/admin/productos/{{ $producto->id }}"
            enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="row g-4">

                {{-- NOMBRE --}}
                <div class="col-md-6">

                    <label class="form-label text-white">
                        Nombre
                    </label>

                    <input type="text"
                        name="nombre"
                        class="form-control"
                        value="{{ old('nombre', $producto->nombre) }}">

                    @error('nombre')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                {{-- PRECIO --}}
                <div class="col-md-6">

                    <label class="form-label text-white">
                        Precio
                    </label>

                    <input type="number"
                        step="0.01"
                        name="precio"
                        class="form-control"
                        value="{{ old('precio', $producto->precio) }}">

                    @error('precio')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                {{-- DESCUENTO --}}
                <div class="col-md-6">

                    <label class="form-label text-white">
                        Descuento
                    </label>

                    <input type="number"
                        name="descuento"
                        class="form-control"
                        value="{{ old('descuento', $producto->descuento) }}">

                    @error('descuento')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                {{-- STOCK --}}
                <div class="col-md-6">

                    <label class="form-label text-white">
                        Stock
                    </label>

                    <input type="number"
                        name="stock"
                        class="form-control"
                        value="{{ old('stock', $producto->stock) }}">

                    @error('stock')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                {{-- DESTACADO --}}
                <div class="col-md-6">

                    <label class="form-label text-white">
                        Destacado
                    </label>

                    <select name="destacado"
                            class="form-select">

                        <option value="1"
                            {{ old('destacado', $producto->destacado) == 1 ? 'selected' : '' }}>
                            Sí
                        </option>

                        <option value="0"
                            {{ old('destacado', $producto->destacado) == 0 ? 'selected' : '' }}>
                            No
                        </option>

                    </select>

                    @error('destacado')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                {{-- MARCA --}}
                <div class="col-md-6">

                    <label class="form-label text-white">
                        Marca
                    </label>

                    <select name="marca_id"
                            class="form-select">

                        @foreach($marcas as $marca)

                            <option value="{{ $marca->id }}"
                                {{ old('marca_id', $producto->marca_id) == $marca->id ? 'selected' : '' }}>

                                {{ $marca->nombre }}

                            </option>

                        @endforeach

                    </select>

                    @error('marca_id')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                {{-- CATEGORIA --}}
                <div class="col-md-6">

                    <label class="form-label text-white">
                        Categoría
                    </label>

                    <select name="categoria_id"
                            class="form-select">

                        @foreach($categorias as $categoria)

                            <option value="{{ $categoria->id }}"
                                {{ old('categoria_id', $producto->categoria_id) == $categoria->id ? 'selected' : '' }}>

                                {{ $categoria->nombre }}

                            </option>

                        @endforeach

                    </select>

                    @error('categoria_id')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                {{-- DESCRIPCION --}}
                <div class="col-12">

                    <label class="form-label text-white">
                        Descripción
                    </label>

                    <textarea name="descripcion"
                            rows="6"
                            class="form-control">{{ old('descripcion', $producto->descripcion) }}</textarea>

                    @error('descripcion')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                {{-- IMAGEN --}}
               <div class="col-12">

                    <label class="form-label text-white">
                        Imagen
                    </label>

                    <div class="mb-3">

                        <img src="{{ asset($producto->imagenes->first()->ruta ?? 'images/default.png') }}"
                            width="140"
                            class="rounded">

                    </div>

                    <input type="file"
                        name="imagen"
                        class="form-control">

                    <small class="text-secondary">
                        Si no seleccionas una imagen, se mantendrá la actual.
                    </small>

                    @error('imagen')
                        <small class="text-danger d-block mt-1">
                            {{ $message }}
                        </small>
                    @enderror

                </div>

                {{-- BOTONES --}}
                <div class="col-12 d-flex gap-3">

                    <button class="dashboard-btn productos-btn">
                        Guardar cambios
                    </button>

                    <a href="/admin/productos"
                    class="dashboard-btn usuarios-btn">
                        Cancelar
                    </a>

                </div>

            </div>

        </form>

    </div>

</div>

</x-layout>