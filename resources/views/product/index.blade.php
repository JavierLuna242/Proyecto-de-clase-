<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - ProShop</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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

        .search-bar {
            flex: 1;
            margin: 0 30px;
            display: flex;
            gap: 0;
            max-width: 500px;
        }

        .search-bar input {
            flex: 1;
            padding: 12px 18px;
            border: none;
            border-radius: 8px 0 0 8px;
            font-size: 14px;
            background-color: rgba(255, 255, 255, 0.95);
            transition: all 0.3s ease;
        }

        .search-bar input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.2);
        }

        .search-bar button {
            padding: 12px 24px;
            background-color: #ff6b6b;
            border: none;
            border-radius: 0 8px 8px 0;
            cursor: pointer;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
        }

        .search-bar button:hover {
            background-color: #ff5252;
            transform: translateX(2px);
        }

        .account {
            color: #fff;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-right: 20px;
        }

        .account:hover {
            opacity: 0.8;
        }

        .cart {
            color: #fff;
            cursor: pointer;
            font-size: 24px;
            transition: all 0.3s ease;
        }

        .cart:hover {
            transform: scale(1.1);
        }

        .banner {
            background: linear-gradient(90deg, #ff6b6b 0%, #ee5a52 50%, #ff6b6b 100%);
            padding: 16px 20px;
            color: white;
            font-size: 14px;
            text-align: center;
            font-weight: 500;
            animation: slide 3s ease-in-out infinite;
        }

        @keyframes slide {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.9;
            }
        }

        .container {
            max-width: 1400px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .section-title {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 30px;
            color: #2c3e50;
            position: relative;
            padding-bottom: 15px;
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
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 28px;
            margin-bottom: 60px;
        }

        .product-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .product-card:hover {
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.15);
            transform: translateY(-8px);
        }

        .product-image-wrapper {
            position: relative;
            overflow: hidden;
            height: 260px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.08);
        }

        .discount-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: linear-gradient(135deg, #ff6b6b, #ee5a52);
            color: white;
            padding: 8px 14px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 700;
            box-shadow: 0 4px 12px rgba(255, 107, 107, 0.3);
            z-index: 2;
        }

        .stock-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: rgba(39, 174, 96, 0.95);
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
            backdrop-filter: blur(10px);
        }

        .stock-badge.limited {
            background: rgba(243, 156, 18, 0.95);
        }

        .product-content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-name {
            font-size: 15px;
            font-weight: 600;
            color: #2c3e50;
            text-decoration: none;
            margin-bottom: 10px;
            line-height: 1.4;
            min-height: 45px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .product-name:hover {
            color: #667eea;
        }

        .rating {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 12px;
            font-size: 12px;
        }

        .stars {
            color: #ffc107;
            font-size: 14px;
            letter-spacing: 1px;
        }

        .rating-count {
            color: #7f8c8d;
            cursor: pointer;
            font-size: 12px;
            transition: color 0.3s ease;
        }

        .rating-count:hover {
            color: #667eea;
        }

        .price-section {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ecf0f1;
        }

        .price {
            font-size: 24px;
            font-weight: 800;
            color: #667eea;
            margin-bottom: 6px;
        }

        .original-price {
            text-decoration: line-through;
            color: #bdc3c7;
            font-size: 13px;
            margin-left: 8px;
        }

        .delivery-info {
            font-size: 12px;
            color: #27ae60;
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .add-to-cart-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 12px 16px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            color: white;
            font-size: 14px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .add-to-cart-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .add-to-cart-btn:active {
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 16px;
            }

            .product-image-wrapper {
                height: 200px;
            }

            .section-title {
                font-size: 28px;
            }

            .search-bar {
                order: 3;
                width: 100%;
                margin: 15px 0 0 0;
                max-width: 100%;
            }

            header {
                flex-wrap: wrap;
            }

            .container {
                margin: 20px auto;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="logo">ProShop</div>
        <div class="search-bar">
            <input type="text" placeholder="Busca tus productos favoritos...">
            <button>Buscar</button>
        </div>
        <div class="account">👤 Cuenta</div>
        <div class="cart">🛒</div>
    </header>

    <!-- Banner -->
    <div class="banner">
        ✨ Mega Ofertas del Mes - Descuentos hasta 50% - Envío Gratis en compras mayores a $50 ✨
    </div>

    <!-- Main Content -->
    <div class="container">
        <h1 class="section-title">Productos Destacados</h1>

        <div class="products-grid">
            <!-- Producto 1 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1588872657840-790ff3bde08c?w=400&h=400&fit=crop"
                        alt="Laptop Ultra Gaming" class="product-image">
                    <div class="discount-badge">-37%</div>
                    <div class="stock-badge">En Stock</div>
                </div>
                <div class="product-content">
                    <div class="product-name">Laptop Ultra Gaming 15.6" FHD Procesador i7</div>
                    <div class="rating">
                        <span class="stars">★★★★★</span>
                        <span class="rating-count">(1,245 reseñas)</span>
                    </div>
                    <div class="price-section">
                        <div class="price">$1,899 <span class="original-price">$2,999</span></div>
                    </div>
                    <div class="delivery-info">🚚 Envío Gratis</div>
                    <button class="add-to-cart-btn">Agregar al Carrito</button>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1527814050087-3793815479db?w=400&h=400&fit=crop"
                        alt="Mouse Inalámbrico" class="product-image">
                    <div class="discount-badge">-49%</div>
                    <div class="stock-badge">En Stock</div>
                </div>
                <div class="product-content">
                    <div class="product-name">Mouse Inalámbrico Premium RGB Silencioso</div>
                    <div class="rating">
                        <span class="stars">★★★★☆</span>
                        <span class="rating-count">(892 reseñas)</span>
                    </div>
                    <div class="price-section">
                        <div class="price">$45 <span class="original-price">$89</span></div>
                    </div>
                    <div class="delivery-info">🚚 Envío Gratis</div>
                    <button class="add-to-cart-btn">Agregar al Carrito</button>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1587829191301-48aca1c0cfe2?w=400&h=400&fit=crop"
                        alt="Teclado Mecánico" class="product-image">
                    <div class="stock-badge">En Stock</div>
                </div>
                <div class="product-content">
                    <div class="product-name">Teclado Mecánico RGB Switches Brown</div>
                    <div class="rating">
                        <span class="stars">★★★★★</span>
                        <span class="rating-count">(567 reseñas)</span>
                    </div>
                    <div class="price-section">
                        <div class="price">$129</div>
                    </div>
                    <div class="delivery-info">🚚 Envío Gratis</div>
                    <button class="add-to-cart-btn">Agregar al Carrito</button>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1527815050087-3793815479db?w=400&h=400&fit=crop"
                        alt="Monitor 4K" class="product-image">
                    <div class="discount-badge">-28%</div>
                    <div class="stock-badge">En Stock</div>
                </div>
                <div class="product-content">
                    <div class="product-name">Monitor 4K 32" Ultra HD IPS 60Hz</div>
                    <div class="rating">
                        <span class="stars">★★★★★</span>
                        <span class="rating-count">(1,823 reseñas)</span>
                    </div>
                    <div class="price-section">
                        <div class="price">$429 <span class="original-price">$599</span></div>
                    </div>
                    <div class="delivery-info">🚚 Envío Gratis</div>
                    <button class="add-to-cart-btn">Agregar al Carrito</button>
                </div>
            </div>

            <!-- Producto 5 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&h=400&fit=crop"
                        alt="Auriculares Bluetooth" class="product-image">
                    <div class="discount-badge">-33%</div>
                    <div class="stock-badge limited">Pocas unidades</div>
                </div>
                <div class="product-content">
                    <div class="product-name">Auriculares Bluetooth Noise Cancelling</div>
                    <div class="rating">
                        <span class="stars">★★★★☆</span>
                        <span class="rating-count">(2,341 reseñas)</span>
                    </div>
                    <div class="price-section">
                        <div class="price">$199 <span class="original-price">$299</span></div>
                    </div>
                    <div class="delivery-info">🚚 Envío Gratis</div>
                    <button class="add-to-cart-btn">Agregar al Carrito</button>
                </div>
            </div>

            <!-- Producto 6 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1587911591437-4f4a97e54b32?w=400&h=400&fit=crop"
                        alt="Webcam Full HD" class="product-image">
                    <div class="stock-badge">En Stock</div>
                </div>
                <div class="product-content">
                    <div class="product-name">Webcam Full HD 1080p con Micrófono</div>
                    <div class="rating">
                        <span class="stars">★★★★★</span>
                        <span class="rating-count">(456 reseñas)</span>
                    </div>
                    <div class="price-section">
                        <div class="price">$79</div>
                    </div>
                    <div class="delivery-info">🚚 Envío Gratis</div>
                    <button class="add-to-cart-btn">Agregar al Carrito</button>
                </div>
            </div>

            <!-- Producto 7 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1527522883525-f2202e388e23?w=400&h=400&fit=crop"
                        alt="Mousepad XXL" class="product-image">
                    <div class="discount-badge">-40%</div>
                    <div class="stock-badge">En Stock</div>
                </div>
                <div class="product-content">
                    <div class="product-name">Mousepad XXL Impermeable RGB</div>
                    <div class="rating">
                        <span class="stars">★★★★☆</span>
                        <span class="rating-count">(234 reseñas)</span>
                    </div>
                    <div class="price-section">
                        <div class="price">$29 <span class="original-price">$49</span></div>
                    </div>
                    <div class="delivery-info">🚚 Envío Gratis</div>
                    <button class="add-to-cart-btn">Agregar al Carrito</button>
                </div>
            </div>

            <!-- Producto 8 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1625948515291-69613efd103f?w=400&h=400&fit=crop"
                        alt="Hub USB 3.0" class="product-image">
                    <div class="stock-badge">En Stock</div>
                </div>
                <div class="product-content">
                    <div class="product-name">Hub USB 3.0 7 Puertos Activo</div>
                    <div class="rating">
                        <span class="stars">★★★★★</span>
                        <span class="rating-count">(678 reseñas)</span>
                    </div>
                    <div class="price-section">
                        <div class="price">$45</div>
                    </div>
                    <div class="delivery-info">🚚 Envío Gratis</div>
                    <button class="add-to-cart-btn">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Agregar interactividad a los botones
        document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const productName = this.closest('.product-card').querySelector('.product-name')
                .textContent;
                alert(`${productName} agregado al carrito!`);
            });
        });
    </script>
</body>

</html>
