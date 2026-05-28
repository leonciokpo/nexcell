<x-layout title="Panel administrador">

<div class="admin-dashboard-container">

    {{-- HEADER --}}
    <div class="admin-dashboard-header">

        <h1 class="admin-dashboard-title">
            Panel de Administración
        </h1>

        <p class="admin-dashboard-subtitle">
            Hola {{ session('usuario_nombre') }}, bienvenido nuevamente
        </p>

    </div>

    {{-- GRID --}}
    <div class="admin-dashboard-grid">

        {{-- PRODUCTOS --}}
        <div class="dashboard-card">

            <div class="dashboard-icon productos">
                <i class="bi bi-box-seam"></i>
            </div>

            <h4>
                Productos
            </h4>

            <p>
                Gestionar productos del catálogo
            </p>

            <a href="/admin/productos"
               class="dashboard-btn productos-btn">
                Ver panel
            </a>

        </div>

        {{-- USUARIOS --}}
        <div class="dashboard-card">

            <div class="dashboard-icon usuarios">
                <i class="bi bi-people"></i>
            </div>

            <h4>
                Usuarios
            </h4>

            <p>
                Administrar clientes y administradores
            </p>

            <a href="/admin/usuarios"
               class="dashboard-btn usuarios-btn">
                Ver panel
            </a>

        </div>

        {{-- CATEGORÍAS --}}
        <div class="dashboard-card">

            <div class="dashboard-icon categorias">
                <i class="bi bi-grid"></i>
            </div>

            <h4>
                Categorías
            </h4>

            <p>
                Organizar categorías del sistema
            </p>

            <a href="/admin/categorias"
               class="dashboard-btn categorias-btn">
                Ver panel
            </a>

        </div>

        {{-- CONSULTAS --}}
        <div class="dashboard-card">

            <div class="dashboard-icon consultas">
                <i class="bi bi-chat-dots"></i>
            </div>

            <h4>
                Consultas
            </h4>

            <p>
                Revisar mensajes y consultas recibidas
            </p>

            <a href="/admin/consultas"
               class="dashboard-btn consultas-btn">
                Ver panel
            </a>

        </div>

    </div>

</div>

</x-layout>