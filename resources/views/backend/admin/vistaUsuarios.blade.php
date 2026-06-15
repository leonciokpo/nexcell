<x-layout title="Panel de usuarios">

<div class="admin-users-container">

    {{-- HEADER --}}
    <div class="admin-users-header">

        <h1 class="admin-users-title">
            Gestión de Usuarios
        </h1>

        <p class="admin-users-subtitle">
            Administra clientes y administradores del sistema
        </p>

    </div>

    {{-- BUSCADOR --}}
    <div class="admin-search-box">

        <form method="GET" action="/admin/usuarios">

            <div class="admin-search-group">

                <i class="bi bi-search"></i>

                <input type="text"
                       name="buscar"
                       placeholder="Buscar usuario..."
                       value="{{ request('buscar') }}">

                <button type="submit">
                    Buscar
                </button>

            </div>

        </form>

    </div>

    {{-- GRID --}}
    <div class="admin-users-grid">

        {{-- ADMINISTRADORES --}}
        <div class="admin-users-card">

            <div class="admin-users-card-header dark">

                <h4>
                    Administradores
                </h4>

                <span>
                    {{ count($administradores) }} usuarios
                </span>

            </div>

            <div class="table-responsive">

                <table class="admin-users-table">

                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach($administradores as $usuario)

                            <tr>

                                <td>
                                    #{{ $usuario->id }}
                                </td>

                                <td>
                                    {{ $usuario->nombre }}
                                </td>

                                <td>
                                    {{ $usuario->email }}
                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

        {{-- CLIENTES --}}
        <div class="admin-users-card">

            <div class="admin-users-card-header primary">

                <h4>
                    Clientes Registrados
                </h4>

                <span>
                    {{ count($clientes) }} usuarios
                </span>

            </div>

            <div class="table-responsive">

                <table class="admin-users-table">

                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach($clientes as $usuario)

                            <tr>

                                <td>
                                    #{{ $usuario->id }}
                                </td>

                                <td>
                                    {{ $usuario->nombre }}
                                </td>

                                <td>
                                    {{ $usuario->email }}
                                </td>

                                {{-- ESTADO --}}
                                <td>

                                    @if($usuario->trashed())

                                        <span class="user-status inactive">
                                            Inactivo
                                        </span>

                                    @else

                                        <span class="user-status active">
                                            Activo
                                        </span>

                                    @endif

                                </td>

                                {{-- ACCIONES --}}
                                <td>

                                    <form method="POST"
                                          action="/admin/usuarios/{{ $usuario->id }}"
                                          onsubmit="return confirm('¿Seguro que quieres cambiar el estado de este usuario?')">

                                        @csrf
                                        @method('DELETE')

                                        @if($usuario->trashed())

                                            <button class="btn-user-action success">
                                                Activar
                                            </button>

                                        @else

                                            <button class="btn-user-action warning">
                                                Desactivar
                                            </button>

                                        @endif

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

</x-layout>