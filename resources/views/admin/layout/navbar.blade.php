<header class="admin-header">
    <div class="admin-header-left">
        <a href="{{ route('admin.index') }}" class="admin-logo">
            <i class="fa-solid fa-cube"></i> Pro<span>Admin</span>
        </a>
        
        <nav class="admin-nav">
            <a href="{{ route('admin.index') }}" class="admin-nav-link active">
                <i class="fa-solid fa-chart-pie"></i> Overview
            </a>
            <a href="{{ route('product.index') }}" class="admin-nav-link">
                <i class="fa-solid fa-box"></i> Inventario
            </a>
            <a href="#" class="admin-nav-link">
                <i class="fa-solid fa-users"></i> Clientes
            </a>
            <a href="#" class="admin-nav-link">
                <i class="fa-solid fa-gear"></i> Ajustes
            </a>
        </nav>
    </div>
    
    <div class="admin-header-right">
        <div class="admin-search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Buscar órdenes, productos...">
        </div>
        
        <a href="{{ route('product.index') }}" class="admin-action-btn" title="Ir a tienda pública">
            <i class="fa-solid fa-globe"></i>
        </a>
        
        <a href="#" class="admin-action-btn" title="Notificaciones">
            <i class="fa-regular fa-bell"></i>
            <span class="admin-badge">4</span>
        </a>
        
        <div class="admin-profile" title="Cuenta">
            <div class="admin-avatar">AD</div>
        </div>
    </div>
</header>
