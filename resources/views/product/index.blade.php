<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - ProShop</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
