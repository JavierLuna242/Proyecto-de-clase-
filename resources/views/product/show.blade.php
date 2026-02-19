<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto - ProShop</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: #2c3e50;
            min-height: 100vh;
        }

        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 8px 32px rgba(102, 126, 234, 0.3);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            color: #fff;
            font-size: 32px;
            font-weight: 800;
            letter-spacing: 1px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            opacity: 0.8;
        }

        .breadcrumb {
            background-color: white;
            padding: 16px 20px;
            font-size: 13px;
            border-bottom: 1px solid #ecf0f1;
            margin-top: 0;
            font-weight: 500;
        }

        .breadcrumb a {
            color: #667eea;
            text-decoration: none;
            margin-right: 8px;
            transition: all 0.3s ease;
        }

        .breadcrumb a:hover {
            color: #764ba2;
            text-decoration: none;
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .product-container {
            background-color: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.08);
            padding: 40px;
        }

        .product-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .product-image-section {
            display: flex;
            flex-direction: column;
        }

        .product-main-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border: 1px solid #ecf0f1;
            border-radius: 12px;
            margin-bottom: 15px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            transition: transform 0.3s ease;
        }

        .product-image-section:hover .product-main-image {
            transform: scale(1.02);
        }

        .product-thumbnails {
            display: flex;
            gap: 10px;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border: 2px solid #ecf0f1;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .thumbnail:hover,
        .thumbnail.active {
            border-color: #667eea;
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.2);
            transform: scale(1.05);
        }

        .product-details {
            display: flex;
            flex-direction: column;
        }

        .product-id {
            font-size: 12px;
            color: #888;
            margin-bottom: 8px;
        }

        .product-title {
            font-size: 32px;
            font-weight: 800;
            color: #2c3e50;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }

        .stars {
            font-size: 20px;
            color: #ffc107;
            letter-spacing: 1px;
        }

        .rating-text {
            font-size: 14px;
            color: #95a5a6;
        }

        .reviews-link {
            color: #667eea;
            text-decoration: none;
            cursor: pointer;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .reviews-link:hover {
            color: #764ba2;
        }

        .price-section {
            margin-bottom: 20px;
        }

        .price-container {
            display: flex;
            align-items: baseline;
            gap: 15px;
            margin-bottom: 10px;
        }

        .current-price {
            font-size: 36px;
            font-weight: 800;
            color: #667eea;
        }

        .original-price {
            font-size: 18px;
            color: #bdc3c7;
            text-decoration: line-through;
        }

        .discount-badge {
            background: linear-gradient(135deg, #ff6b6b, #ee5a52);
            color: white;
            padding: 8px 14px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 700;
            box-shadow: 0 4px 12px rgba(255, 107, 107, 0.3);
        }

        .savings-text {
            font-size: 14px;
            color: #ff6b6b;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .stock-status {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }

        .status-indicator {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #27ae60;
            box-shadow: 0 0 0 3px rgba(39, 174, 96, 0.1);
        }

        .status-indicator.low-stock {
            background-color: #f39c12;
            box-shadow: 0 0 0 3px rgba(243, 156, 18, 0.1);
        }

        .status-indicator.out-stock {
            background-color: #ff6b6b;
            box-shadow: 0 0 0 3px rgba(255, 107, 107, 0.1);
        }

        .status-text.in-stock {
            color: #27ae60;
            font-weight: 700;
        }

        .status-text.low-stock {
            color: #f39c12;
            font-weight: 700;
        }

        .description-box {
            background: linear-gradient(135deg, #f8f9ff 0%, #f0f0f8 100%);
            border-left: 4px solid #667eea;
            padding: 16px;
            margin-bottom: 25px;
            border-radius: 10px;
        }

        .description-title {
            font-size: 14px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .description-text {
            font-size: 14px;
            color: #555;
            line-height: 1.6;
        }

        .action-buttons {
            display: flex;
            gap: 12px;
            margin-bottom: 25px;
        }

        .btn {
            flex: 1;
            padding: 14px 20px;
            font-size: 16px;
            font-weight: 700;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background-color: #ecf0f1;
            color: #2c3e50;
            border: 2px solid #e0e0e0;
        }

        .btn-secondary:hover {
            background-color: #e0e0e0;
            border-color: #bdc3c7;
            transform: translateY(-2px);
        }

        .btn-share {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background-color: transparent;
            border: 2px solid #ecf0f1;
            color: #2c3e50;
        }

        .btn-share:hover {
            border-color: #667eea;
            color: #667eea;
            transform: translateY(-2px);
        }

        .delivery-info {
            background: linear-gradient(135deg, #f0f8ff 0%, #e8f5f5 100%);
            border: 1px solid #b3e5fc;
            border-radius: 10px;
            padding: 16px;
            margin-bottom: 25px;
            font-size: 13px;
            color: #2c5aa0;
        }

        .delivery-info-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .delivery-info-item:last-child {
            margin-bottom: 0;
        }

        .info-icon {
            font-size: 18px;
        }

        .specs-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .specs-table th,
        .specs-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        .specs-table th {
            background: linear-gradient(135deg, #f8f9ff 0%, #f0f0f8 100%);
            font-weight: 700;
            color: #2c3e50;
            border-bottom: 2px solid #ecf0f1;
        }

        .specs-table td {
            border-bottom: 1px solid #ecf0f1;
        }

        .specs-table tr:last-child td {
            border-bottom: none;
        }

        .related-products {
            margin-top: 60px;
            padding-top: 40px;
            border-top: 2px solid #ecf0f1;
        }

        .section-title {
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 25px;
            color: #2c3e50;
            position: relative;
            padding-bottom: 12px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
        }

        .related-card {
            background-color: white;
            border: 1px solid #ecf0f1;
            border-radius: 12px;
            padding: 14px;
            text-align: center;
            cursor: pointer;
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .related-card:hover {
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.15);
            transform: translateY(-4px);
            border-color: #667eea;
        }

        .related-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            margin-bottom: 12px;
            border-radius: 8px;
        }

        .related-card-name {
            font-size: 13px;
            font-weight: 600;
            color: #667eea;
            margin-bottom: 8px;
        }

        .related-card-price {
            font-size: 18px;
            font-weight: 800;
            color: #2c3e50;
        }

        @media (max-width: 768px) {
            .product-layout {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .product-main-image {
                height: 300px;
            }

            .product-title {
                font-size: 22px;
            }

            .current-price {
                font-size: 24px;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn {
                padding: 12px 16px;
                font-size: 14px;
            }

            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            }
        }
    </style>
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
