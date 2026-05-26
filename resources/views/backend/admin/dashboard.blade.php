<x-layout title="Panel administrador">

    <div class="container py-5">

        <div class="text-center mb-5">

            <h1 class="fw-bold">
                Panel de Administración
            </h1>

            <p class="text-muted fs-5">
                Hola {{ session('usuario_nombre') }}
            </p>

        </div>

        <div class="row g-4">

            {{-- Productos --}}
            <div class="col-md-3">
                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <h5 class="card-title">
                            Productos
                        </h5>

                        <p class="text-muted">
                            Gestionar productos
                        </p>

                        <a href="/admin/productos"
                           class="btn btn-primary">
                            Ver
                        </a>

                    </div>

                </div>
            </div>

            {{-- Usuarios --}}
            <div class="col-md-3">
                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <h5 class="card-title">
                            Usuarios
                        </h5>

                        <p class="text-muted">
                            Administrar usuarios
                        </p>

                        <a href="/admin/usuarios"
                           class="btn btn-dark">
                            Ver
                        </a>

                    </div>

                </div>
            </div>

            {{-- Categorías --}}
            <div class="col-md-3">
                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <h5 class="card-title">
                            Categorías
                        </h5>

                        <p class="text-muted">
                            Gestionar categorías
                        </p>

                        <a href="/admin/categorias"
                           class="btn btn-success">
                            Ver
                        </a>

                    </div>

                </div>
            </div>

            {{-- Consultas --}}
            <div class="col-md-3">
                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <h5 class="card-title">
                            Consultas
                        </h5>

                        <p class="text-muted">
                            Mensajes de contacto
                        </p>

                        <a href="/admin/consultas"
                           class="btn btn-warning">
                            Ver
                        </a>

                    </div>

                </div>
            </div>

        </div>

    </div>

</x-layout>