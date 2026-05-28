<x-layout title="Consultas">

<div class="admin-panel-container">

    {{-- HEADER --}}
    <div class="admin-header">
        <h1 class="admin-title">
            Consultas de Clientes
        </h1>

        <p class="admin-subtitle">
            Gestión de mensajes recibidos desde el formulario de contacto
        </p>
    </div>

    {{-- PANEL --}}
    <div class="admin-panel-card">

        {{-- TOP --}}
        <div class="admin-panel-top">

            <div>
                <h4 class="admin-panel-heading">
                    Mensajes recibidos
                </h4>

                <span class="admin-panel-count">
                    {{ count($consultas) }} consultas
                </span>
            </div>

        </div>

        {{-- TABLA --}}
        <div class="table-responsive">

            <table class="admin-table">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Motivo</th>
                        <th>Consulta</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($consultas as $consulta)

                        <tr>

                            <td>
                                #{{ $consulta->id }}
                            </td>

                            <td>
                                {{ $consulta->nombre }}
                            </td>

                            <td>
                                {{ $consulta->email }}
                            </td>

                            <td>
                                <span class="admin-tag">
                                    {{ $consulta->motivo }}
                                </span>
                            </td>

                            <td class="consulta-text">
                                {{ $consulta->consulta }}
                            </td>

                            <td>
                                {{ $consulta->created_at->format('d/m/Y H:i') }}
                            </td>

                            {{-- ESTADO --}}
                            <td>

                                @if($consulta->leido)

                                    <span class="status-badge success">
                                        Leído
                                    </span>

                                @else

                                    <span class="status-badge warning">
                                        No leído
                                    </span>

                                @endif

                            </td>

                            {{-- ACCIONES --}}
                            <td>

                                <form method="POST"
                                      action="/admin/consultas/{{ $consulta->id }}/estado">

                                    @csrf
                                    @method('PATCH')

                                    @if($consulta->leido)

                                        <input type="hidden"
                                               name="leido"
                                               value="0">

                                        <button class="btn-admin warning">
                                            Marcar no leído
                                        </button>

                                    @else

                                        <input type="hidden"
                                               name="leido"
                                               value="1">

                                        <button class="btn-admin success">
                                            Marcar leído
                                        </button>

                                    @endif

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="8" class="empty-table">
                                No hay consultas registradas
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-layout>