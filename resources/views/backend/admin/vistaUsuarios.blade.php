<x-layout title="Panel de usuarios">

<div class="container py-5">

    <h1 class="mb-5 text-center fw-bold">
        Gestión de Usuarios
    </h1>

    {{-- BUSCADOR --}}
    <form method="GET" action="/admin/usuarios" class="mb-4">

        <div class="input-group">
            <span class="input-group-text">
                <i class="bi bi-search"></i>
            </span>

            <input type="text"
                   name="buscar"
                   class="form-control"
                   placeholder="Buscar usuario..."
                   value="{{ request('buscar') }}">

            <button class="btn btn-dark">Buscar</button>
        </div>

    </form>

    <div class="row g-4">

        {{-- ADMINISTRADORES --}}
        <div class="col-md-6">

            <div class="card shadow border-0 h-100">

                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Administradores</h4>
                </div>

                <div class="card-body">

                    <table class="table align-middle">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($administradores as $usuario)

                                <tr>
                                    <td>{{ $usuario->id }}</td>
                                    <td>{{ $usuario->nombre }}</td>
                                    <td>{{ $usuario->email }}</td>

                                    <td>

                                        {{-- CAMBIAR ROL (UNIFICADO) --}}
                                        <form method="POST" action="/admin/usuarios/{{ $usuario->id }}/rol">
                                            @csrf

                                            <select name="perfil_id" class="form-select form-select-sm">
                                                <option value="1" {{ $usuario->perfil_id == 1 ? 'selected' : '' }}>
                                                    Admin
                                                </option>

                                                <option value="2" {{ $usuario->perfil_id == 2 ? 'selected' : '' }}>
                                                    Cliente
                                                </option>
                                            </select>

                                            <button class="btn btn-sm btn-dark mt-1">
                                                Cambiar
                                            </button>

                                        </form>

                                        {{-- ELIMINAR --}}
                                        <form method="POST"
                                              action="/admin/usuarios/{{ $usuario->id }}"
                                              onsubmit="return confirm('¿Seguro que quieres eliminar este usuario?')">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-sm btn-danger mt-1">
                                                Eliminar
                                            </button>

                                        </form>

                                    </td>
                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        {{-- CLIENTES --}}
        <div class="col-md-6">

            <div class="card shadow border-0 h-100">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Clientes Registrados</h4>
                </div>

                <div class="card-body">

                    <table class="table align-middle">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($clientes as $usuario)

                                <tr>
                                    <td>{{ $usuario->id }}</td>
                                    <td>{{ $usuario->nombre }}</td>
                                    <td>{{ $usuario->email }}</td>

                                    <td>

                                        {{-- CAMBIAR ROL (MISMO FORM, SIN DUPLICAR LÓGICA) --}}
                                        <form method="POST" action="/admin/usuarios/{{ $usuario->id }}/rol">
                                            @csrf

                                            <select name="perfil_id" class="form-select form-select-sm">
                                                <option value="2" {{ $usuario->perfil_id == 2 ? 'selected' : '' }}>
                                                    Cliente
                                                </option>

                                                <option value="1" {{ $usuario->perfil_id == 1 ? 'selected' : '' }}>
                                                    Admin
                                                </option>
                                            </select>

                                            <button class="btn btn-sm btn-dark mt-1">
                                                Cambiar
                                            </button>

                                        </form>

                                        {{-- ELIMINAR --}}
                                        <form method="POST"
                                              action="/admin/usuarios/{{ $usuario->id }}"
                                              onsubmit="return confirm('¿Seguro que quieres eliminar este usuario?')">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-sm btn-danger mt-1">
                                                Eliminar
                                            </button>

                                        </form>

                                    </td>
                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

</x-layout>