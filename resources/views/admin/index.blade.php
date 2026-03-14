@extends('admin.layout.app')

@section('title', 'Admin Dashboard - ProShop')

@section('content')

    <div class="admin-page-header">
        <div>
            <h1 class="admin-page-title">Dashboard Overview</h1>
            <p class="admin-page-subtitle">Bienvenido al panel de administración. Aquí tienes un resumen del comercio.</p>
        </div>
        <a href="{{ route('product.index') }}" class="admin-btn-primary">
            <i class="fa-solid fa-plus"></i> Nuevo Producto
        </a>
    </div>

    <!-- Stats Row -->
    <div class="admin-stats-grid">
        <div class="admin-stat-card">
            <div class="admin-stat-header">
                <span class="admin-stat-title">Ingresos Brutos</span>
                <div class="admin-stat-icon icon-blue">
                    <i class="fa-solid fa-dollar-sign"></i>
                </div>
            </div>
            <div class="admin-stat-value">$24,590.00</div>
            <div class="admin-stat-trend trend-up">
                <i class="fa-solid fa-arrow-trend-up"></i>
                <span>+12.5% desde el mes pasado</span>
            </div>
        </div>

        <div class="admin-stat-card">
            <div class="admin-stat-header">
                <span class="admin-stat-title">Productos Activos</span>
                <div class="admin-stat-icon icon-purple">
                    <i class="fa-solid fa-box"></i>
                </div>
            </div>
            <div class="admin-stat-value">{{ $totalProducts }}</div>
            <div class="admin-stat-trend trend-up">
                <i class="fa-solid fa-arrow-trend-up"></i>
                <span>Inventario actualizado</span>
            </div>
        </div>

        <div class="admin-stat-card">
            <div class="admin-stat-header">
                <span class="admin-stat-title">Órdenes Hoy</span>
                <div class="admin-stat-icon icon-orange">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
            </div>
            <div class="admin-stat-value">142</div>
            <div class="admin-stat-trend trend-down">
                <i class="fa-solid fa-arrow-trend-down"></i>
                <span>-2.4% que ayer</span>
            </div>
        </div>

        <div class="admin-stat-card">
            <div class="admin-stat-header">
                <span class="admin-stat-title">Clientes Nuevos</span>
                <div class="admin-stat-icon icon-green">
                    <i class="fa-solid fa-users"></i>
                </div>
            </div>
            <div class="admin-stat-value">1,245</div>
            <div class="admin-stat-trend trend-up">
                <i class="fa-solid fa-arrow-trend-up"></i>
                <span>+18.2% esta semana</span>
            </div>
        </div>
    </div>

    <div class="admin-dashboard-grid">
        <!-- Main Table Panel -->
        <div class="admin-panel">
            <div class="admin-panel-header">
                <h2 class="admin-panel-title">Inventario Reciente</h2>
                <a href="{{ route('product.index') }}" class="admin-panel-action">Ver todo</a>
            </div>

            <div style="overflow-x: auto;">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <div class="td-product">
                                        <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://exitocol.vtexassets.com/arquivos/ids/31725643/Computador-Gaming-HP-Omen-Gaming-Intel-Core-Ultra-7-155H-RAM-16-GB-1-TB-SSD-14-fb0001la-3568707_a.jpg' }}"
                                            alt="{{ $product->name }}" class="td-product-img">
                                        <div>
                                            <span class="td-product-name">{{ $product->name }}</span>
                                            <span class="td-product-sku">ID: {{ $product->id }} | SKU:
                                                {{ $product->sku ?? 'N/A' }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td>45 und.</td>
                                <td style="font-weight: 600; color: #0f172a;">${{ number_format($product->price, 2) }}</td>
                                <td>
                                    <span class="status-badge status-success">Activo</span>
                                </td>
                                <td>
                                    <div class="td-actions">
                                        <button class="btn-icon edit" title="Editar"><i
                                                class="fa-solid fa-pen"></i></button>
                                        <button class="btn-icon delete" title="Eliminar"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Secondary Panel -->
        <div class="admin-panel">
            <div class="admin-panel-header">
                <h2 class="admin-panel-title">Top Productos</h2>
            </div>

            <div style="padding: 0;">
                <table class="admin-table">
                    <tbody>
                        @foreach ($topProducts as $top)
                            <tr>
                                <td style="padding: 16px;">
                                    <div class="td-product">
                                        <img src="{{ $top->image ? asset('storage/' . $top->image) : 'https://exitocol.vtexassets.com/arquivos/ids/31725643/Computador-Gaming-HP-Omen-Gaming-Intel-Core-Ultra-7-155H-RAM-16-GB-1-TB-SSD-14-fb0001la-3568707_a.jpg' }}"
                                            alt="{{ $top->name }}" class="td-product-img" style="border-radius: 50%;">
                                        <div>
                                            <span class="td-product-name">{{ $top->name }}</span>
                                            <span class="td-product-sku">${{ number_format($top->price) }}</span>
                                        </div>
                                        <div style="margin-left: auto; color: #22c55e; font-size: 13px; font-weight: 600;">
                                            <i class="fa-solid fa-caret-up"></i>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="padding: 16px; text-align: center; border-top: 1px solid #e2e8f0;">
                <a href="#" class="admin-panel-action">Ver reporte completo</a>
            </div>
        </div>
    </div>

@endsection
