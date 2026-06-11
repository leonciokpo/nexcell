<x-layout title="Panel administrador" bodyClass="admin-dashboard-body">

    <div class="admin-dashboard-wrapper">

        {{-- HERO --}}
        <div class="admin-hero">

            <div>

                <span class="admin-badge">
                    PANEL ADMIN
                </span>

                <h1 class="admin-dashboard-title">
                    Bienvenido,
                    {{ session('usuario_nombre') }}
                </h1>

                <p class="admin-dashboard-subtitle">
                    Gestioná productos, usuarios y consultas
                    desde un único lugar.
                </p>

            </div>

            <div class="admin-hero-icon">
                <i class="bi bi-shield-lock"></i>
            </div>

        </div>

        {{-- GRID --}}
        <div class="admin-dashboard-grid">

            {{-- PRODUCTOS --}}
            <div class="dashboard-card">

                <div class="dashboard-top">
                    <div class="dashboard-icon productos">
                        <i class="bi bi-box-seam"></i>
                    </div>

                    <span class="dashboard-tag">
                        Catálogo
                    </span>
                </div>

                <h4>Productos</h4>

                <p>
                    Administrá el catálogo completo
                    de productos y stock.
                </p>

                <a href="/admin/productos"
                class="dashboard-btn productos-btn">

                    Ver panel
                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

            {{-- USUARIOS --}}
            <div class="dashboard-card">

                <div class="dashboard-top">

                    <div class="dashboard-icon usuarios">
                        <i class="bi bi-people"></i>
                    </div>

                    <span class="dashboard-tag">
                        Sistema
                    </span>

                </div>

                <h4>Usuarios</h4>

                <p>
                    Gestioná clientes, permisos
                    y administradores.
                </p>

                <a href="/admin/usuarios"
                class="dashboard-btn usuarios-btn">

                    Ver panel
                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

            {{-- CATEGORÍAS --}}
            <div class="dashboard-card">

                <div class="dashboard-top">

                    <div class="dashboard-icon categorias">
                        <i class="bi bi-grid"></i>
                    </div>

                    <span class="dashboard-tag">
                        Organización
                    </span>

                </div>

                <h4>Categorías</h4>

                <p>
                    Organizá productos
                    y estructura del sistema.
                </p>

                <a href="/admin/categorias"
                class="dashboard-btn categorias-btn">

                    Ver panel
                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

            {{-- CONSULTAS --}}
            <div class="dashboard-card">

                <div class="dashboard-top">

                    <div class="dashboard-icon consultas">
                        <i class="bi bi-chat-dots"></i>
                    </div>

                    <span class="dashboard-tag">
                        Clientes
                    </span>

                </div>

                <h4>Consultas</h4>

                <p>
                    Revisá mensajes y consultas
                    recibidas desde el sitio.
                </p>

                <a href="/admin/consultas"
                class="dashboard-btn consultas-btn">

                    Ver panel
                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

            {{-- VENTAS --}}
            <div class="dashboard-card">

                <div class="dashboard-top">

                    <div class="dashboard-icon ventas">
                        <i class="bi bi-receipt-cutoff"></i>
                    </div>

                    <span class="dashboard-tag">
                        Reportes
                    </span>

                </div>

                <h4>Ventas</h4>

                <p>
                    Consultá el historial de ventas,
                    órdenes confirmadas y estadísticas.
                </p>

                <a href="/admin/ventas"
                class="dashboard-btn ventas-btn">

                    Ver panel
                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>
        </div>

    </div>

</x-layout>