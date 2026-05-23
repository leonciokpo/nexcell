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

            <div class="col-md-4">
                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <h5 class="card-title">
                            Productos
                        </h5>

                        <p class="text-muted">
                            Gestionar productos del sistema
                        </p>

                        <a href="/productos"
                           class="btn btn-primary">
                            Ver Productos
                        </a>

                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <h5 class="card-title">
                            Usuarios
                        </h5>

                        <p class="text-muted">
                            Administrar usuarios registrados
                        </p>

                        <a href="/usuarios"
                           class="btn btn-dark">
                            Ver Usuarios
                        </a>

                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow border-0 h-100">

                    <div class="card-body text-center">

                        <h5 class="card-title">
                            Crear Producto
                        </h5>

                        <p class="text-muted">
                            Agregar nuevos productos
                        </p>

                        <a href="/productos/create"
                           class="btn btn-success">
                            Agregar
                        </a>

                    </div>

                </div>
            </div>

        </div>

    </div>

</x-layout>