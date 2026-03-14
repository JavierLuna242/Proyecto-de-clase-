@extends('product.Layout.app')

@section('title', 'Detalles del Producto - ProShop')

@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="{{ route('product.index') }}">🏠 Inicio</a> / <a href="{{ route('product.index') }}">📦 Productos</a> /
        <span>💻 {{ $producto->name }}</span>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="product-container">
            <div class="product-layout">
                <!-- Image Section -->
                <div class="product-image-section">
                    <img src="{{ $producto->image ? asset('storage/' . $producto->image) : 'https://exitocol.vtexassets.com/arquivos/ids/31725643/Computador-Gaming-HP-Omen-Gaming-Intel-Core-Ultra-7-155H-RAM-16-GB-1-TB-SSD-14-fb0001la-3568707_a.jpg?v=638984923323400000' }}"
                        class="product-main-image" alt="{{ $producto->name }}">
                    <div class="product-thumbnails">
                        <img src="{{ $producto->image ? asset('storage/' . $producto->image) : 'https://exitocol.vtexassets.com/arquivos/ids/31725643/Computador-Gaming-HP-Omen-Gaming-Intel-Core-Ultra-7-155H-RAM-16-GB-1-TB-SSD-14-fb0001la-3568707_a.jpg?v=638984923323400000' }}"
                            class="thumbnail active" alt="{{ $producto->name }} - Vista 1">
                        <img src="{{ $producto->image ? asset('storage/' . $producto->image) : 'https://exitocol.vtexassets.com/arquivos/ids/31725643/Computador-Gaming-HP-Omen-Gaming-Intel-Core-Ultra-7-155H-RAM-16-GB-1-TB-SSD-14-fb0001la-3568707_a.jpg?v=638984923323400000' }}"
                            class="thumbnail" alt="{{ $producto->name }} - Vista 2">
                        <img src="{{ $producto->image ? asset('storage/' . $producto->image) : 'https://exitocol.vtexassets.com/arquivos/ids/31725643/Computador-Gaming-HP-Omen-Gaming-Intel-Core-Ultra-7-155H-RAM-16-GB-1-TB-SSD-14-fb0001la-3568707_a.jpg?v=638984923323400000' }}"
                            class="thumbnail" alt="{{ $producto->name }} - Vista 3">
                        <img src="{{ $producto->image ? asset('storage/' . $producto->image) : 'https://exitocol.vtexassets.com/arquivos/ids/31725643/Computador-Gaming-HP-Omen-Gaming-Intel-Core-Ultra-7-155H-RAM-16-GB-1-TB-SSD-14-fb0001la-3568707_a.jpg?v=638984923323400000' }}"
                            class="thumbnail" alt="{{ $producto->name }} - Vista 4">
                    </div>
                </div>

                <!-- Details Section -->
                <div class="product-details">
                    <div class="product-id">SKU: PRD-{{ str_pad($producto->id, 3, '0', STR_PAD_LEFT) }}</div>
                    <h1 class="product-title">{{ $producto->name }}</h1>

                    <!-- Rating -->
                    <div class="product-rating">
                        <span class="stars">★★★★★</span>
                        <span class="rating-text">4.8 de 5 estrellas</span>
                        <a href="#" class="reviews-link">(1,245 reseñas)</a>
                    </div>

                    <!-- Price Section -->
                    <div class="price-section">
                        <div class="price-container">
                            <span class="current-price">${{ number_format($producto->price) }}</span>
                        </div>
                    </div>

                    <!-- Stock Status -->
                    <div class="stock-status">
                        <span class="status-indicator"></span>
                        <span class="status-text in-stock">✓ En stock - Envío inmediato</span>
                    </div>

                    <!-- Description -->
                    <div class="description-box">
                        <div class="description-title">Descripción del Producto</div>
                        <div class="description-text">
                            {{ $producto->description }}
                        </div>
                    </div>

                    <!-- Delivery Info -->
                    <div class="delivery-info">
                        <div class="delivery-info-item">
                            <span class="info-icon">🚚</span>
                            <span><strong>Envío Gratis</strong> a cualquier parte del país</span>
                        </div>
                        <div class="delivery-info-item">
                            <span class="info-icon">⏱️</span>
                            <span>Llega en <strong>2-3 días hábiles</strong></span>
                        </div>
                        <div class="delivery-info-item">
                            <span class="info-icon">🔄</span>
                            <span><strong>Garantía</strong> de 2 años</span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="action-buttons">
                        <button type="button" class="btn btn-primary" disabled aria-disabled="true">🛒 Agregar al
                            Carrito</button>
                        <button type="button" class="btn btn-secondary" disabled aria-disabled="true">❤️
                            Favoritos</button>
                        <button type="button" class="btn btn-share" disabled aria-disabled="true">Compartir</button>
                    </div>

                    <!-- Specifications Table -->
                    <table class="specs-table">
                        <tr>
                            <th>Especificación</th>
                            <th>Detalle</th>
                        </tr>
                        <tr>
                            <td>Pantalla</td>
                            <td>15.6" Full HD IPS 1920x1080</td>
                        </tr>
                        <tr>
                            <td>Procesador</td>
                            <td>Intel Core i7-12700H</td>
                        </tr>
                        <tr>
                            <td>Memoria RAM</td>
                            <td>32GB DDR6 3200MHz</td>
                        </tr>
                        <tr>
                            <td>Almacenamiento</td>
                            <td>1TB SSD NVMe</td>
                        </tr>
                        <tr>
                            <td>Tarjeta Gráfica</td>
                            <td>NVIDIA GeForce RTX 5070 12GB</td>
                        </tr>
                        <tr>
                            <td>Batería</td>
                            <td>80Wh hasta 12 horas</td>
                        </tr>
                        <tr>
                            <td>Sistema Operativo</td>
                            <td>Windows 11 Pro</td>
                        </tr>
                        <tr>
                            <td>Peso</td>
                            <td>2.1 kg</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Related Products Section -->
            <div class="related-products">
                <h2 class="section-title">Productos Relacionados</h2>
                <div class="products-grid">
                    <div class="related-card">
                        <img src="https://www.logitechstore.com.co/cdn/shop/files/D_884565-MCO76612920004_062024-B.jpg?v=1749834185&width=600"
                            alt="Producto">
                        <div class="related-card-name">Mouse Inalámbrico Premium RGB</div>
                        <div class="related-card-price">$45</div>
                    </div>
                    <div class="related-card">
                        <img src="https://www.pcware.com.co/wp-content/uploads/2024/01/22VG-GSPL_001-1200x675.jpg"
                            alt="Producto">
                        <div class="related-card-name">Teclado Mecánico RGB Switches</div>
                        <div class="related-card-price">$129</div>
                    </div>
                    <div class="related-card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4krQdQJEe4Lvwja-VW93LJsvMFdFruN4urA&s"
                            alt="Producto">
                        <div class="related-card-name">Monitor 4K 32" Ultra HD</div>
                        <div class="related-card-price">$429</div>
                    </div>
                    <div class="related-card">
                        <img src="https://m.media-amazon.com/images/I/71ZpqzTlZrL._AC_SL1500_.jpg"
                            alt="Producto">
                        <div class="related-card-name">Auriculares Bluetooth Noise Cancelling</div>
                        <div class="related-card-price">$199</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
