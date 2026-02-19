<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto - ProShop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="logo">ProShop</div>
        <div class="nav-links">
            <a href="/" class="nav-link">🏠 Inicio</a>
            <a href="/productos" class="nav-link">📦 Productos</a>
            <a href="#" class="nav-link">👤 Cuenta</a>
            <a href="#" class="nav-link">🛒 Carrito</a>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="/">🏠 Inicio</a> / <a href="/productos">📦 Productos</a> / <span>💻 Laptop Ultra Gaming 15.6"
            FHD</span>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="product-container">
            <div class="product-layout">
                <!-- Image Section -->
                <div class="product-image-section">
                    <img src="https://images.unsplash.com/photo-1588872657840-790ff3bde08c?w=600&h=600&fit=crop"
                        class="product-main-image" alt="Producto">
                    <div class="product-thumbnails">
                        <img src="https://images.unsplash.com/photo-1588872657840-790ff3bde08c?w=100&h=100&fit=crop"
                            class="thumbnail active" alt="Imagen 1">
                        <img src="https://images.unsplash.com/photo-1589939705882-451ec28ca7f7?w=100&h=100&fit=crop"
                            class="thumbnail" alt="Imagen 2">
                        <img src="https://images.unsplash.com/photo-1603302576837-37561b1e2c91?w=100&h=100&fit=crop"
                            class="thumbnail" alt="Imagen 3">
                        <img src="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=100&h=100&fit=crop"
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
                            Potente laptop gaming con procesador Intel Core i7 de última generación, 16GB de RAM DDR4 y
                            SSD de 512GB. Pantalla IPS Full HD de 15.6" con colores vibrantes. Ideal para juegos, diseño
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
                        <button class="btn btn-primary">🛒 Agregar al Carrito</button>
                        <button class="btn btn-secondary">❤️ Favoritos</button>
                        <button class="btn btn-share">Compartir</button>
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
                            <td>16GB DDR4 3200MHz</td>
                        </tr>
                        <tr>
                            <td>Almacenamiento</td>
                            <td>512GB SSD NVMe</td>
                        </tr>
                        <tr>
                            <td>Tarjeta Gráfica</td>
                            <td>NVIDIA GeForce RTX 3050 6GB</td>
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
                        <img src="https://images.unsplash.com/photo-1527814050087-3793815479db?w=150&h=150&fit=crop"
                            alt="Producto">
                        <div class="related-card-name">Mouse Inalámbrico Premium RGB</div>
                        <div class="related-card-price">$45</div>
                    </div>
                    <div class="related-card">
                        <img src="https://images.unsplash.com/photo-1587829191301-48aca1c0cfe2?w=150&h=150&fit=crop"
                            alt="Producto">
                        <div class="related-card-name">Teclado Mecánico RGB Switches</div>
                        <div class="related-card-price">$129</div>
                    </div>
                    <div class="related-card">
                        <img src="https://images.unsplash.com/photo-1527522883525-f2202e388e23?w=150&h=150&fit=crop"
                            alt="Producto">
                        <div class="related-card-name">Monitor 4K 32" Ultra HD</div>
                        <div class="related-card-price">$429</div>
                    </div>
                    <div class="related-card">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=150&h=150&fit=crop"
                            alt="Producto">
                        <div class="related-card-name">Auriculares Bluetooth Noise Cancelling</div>
                        <div class="related-card-price">$199</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Thumbnail image switching
        const thumbnails = document.querySelectorAll('.thumbnail');
        const mainImage = document.querySelector('.product-main-image');

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                // Reemplazar parámetros de tamaño en URL de Unsplash
                const newSrc = thumbnail.src.replace('w=100&h=100', 'w=600&h=600');
                mainImage.src = newSrc;
                thumbnails.forEach(thumb => thumb.classList.remove('active'));
                thumbnail.classList.add('active');
            });
        });

        // Button interactions
        document.querySelector('.btn-primary').addEventListener('click', () => {
            alert('Producto agregado al carrito');
        });

        document.querySelector('.btn-secondary').addEventListener('click', () => {
            alert('Producto agregado a favoritos');
        });

        document.querySelector('.btn-share').addEventListener('click', () => {
            alert('Compartir: puedes copiar el enlace o compartir en redes sociales');
        });
    </script>
</body>

</html>
