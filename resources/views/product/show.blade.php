@extends('product.Layout.app')

@section('title', 'Detalles del Producto - ProShop')

@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="#" onclick="return false;">🏠 Inicio</a> / <a href="#" onclick="return false;">📦 Productos</a> /
        <span>💻 Laptop Ultra Gaming 15.6" FHD</span>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="product-container">
            <div class="product-layout">
                <!-- Image Section -->
                <div class="product-image-section">
                    <img src="https://exitocol.vtexassets.com/arquivos/ids/31725643/Computador-Gaming-HP-Omen-Gaming-Intel-Core-Ultra-7-155H-RAM-16-GB-1-TB-SSD-14-fb0001la-3568707_a.jpg?v=638984923323400000"
                        class="product-main-image" alt="Producto">
                    <div class="product-thumbnails">
                        <img src="https://exitocol.vtexassets.com/arquivos/ids/31725643/Computador-Gaming-HP-Omen-Gaming-Intel-Core-Ultra-7-155H-RAM-16-GB-1-TB-SSD-14-fb0001la-3568707_a.jpg?v=638984923323400000"
                            class="thumbnail active" alt="Imagen 1">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_2X_849262-MLA88397809363_072025-F.webp"
                            class="thumbnail" alt="Imagen 2">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_2X_864278-MLA88398016339_072025-F.webpp"
                            class="thumbnail" alt="Imagen 3">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_2X_765615-MLA94121343960_102025-F.webp"
                            class="thumbnail" alt="Imagen 4">
                    </div>
                </div>

                <!-- Details Section -->
                <div class="product-details">
                    <div class="product-id">SKU: PRD-001</div>
                    <h1 class="product-title">Laptop Ultra Gaming 15.6" FHD Procesador i7 16GB RAM 512GB SSD</h1>

                    <!-- Rating -->
                    <div class="product-rating">
                        <span class="stars">★★★★★</span>
                        <span class="rating-text">4.8 de 5 estrellas</span>
                        <a href="#" class="reviews-link">(1,245 reseñas)</a>
                    </div>

                    <!-- Price Section -->
                    <div class="price-section">
                        <div class="price-container">
                            <span class="current-price">$1,899</span>
                            <span class="original-price">$2,999</span>
                            <span class="discount-badge">-37%</span>
                        </div>
                        <div class="savings-text">Ahorras $1,100</div>
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
                            Potente laptop gaming con procesador Intel Core i7 de última generación, 32GB de RAM DDR6 y
                            SSD de 1TB NVMe. Pantalla IPS Full HD de 15.6" con colores vibrantes. Ideal para juegos, diseño
                            gráfico y aplicaciones profesionales.
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
