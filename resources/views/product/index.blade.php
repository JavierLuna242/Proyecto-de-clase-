@extends('product.Layout.app')

@section('title', 'Productos - ProShop')

@section('content')

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
                    <img src="https://exitocol.vtexassets.com/arquivos/ids/31725643/Computador-Gaming-HP-Omen-Gaming-Intel-Core-Ultra-7-155H-RAM-16-GB-1-TB-SSD-14-fb0001la-3568707_a.jpg?v=638984923323400000"
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
                    <button type="button" class="add-to-cart-btn" disabled aria-disabled="true">Agregar al
                        Carrito</button>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://www.logitechstore.com.co/cdn/shop/files/D_884565-MCO76612920004_062024-B.jpg?v=1749834185&width=600"
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
                    <button type="button" class="add-to-cart-btn" disabled aria-disabled="true">Agregar al
                        Carrito</button>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://www.pcware.com.co/wp-content/uploads/2024/01/22VG-GSPL_001-1200x675.jpg"
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
                    <button type="button" class="add-to-cart-btn" disabled aria-disabled="true">Agregar al
                        Carrito</button>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4krQdQJEe4Lvwja-VW93LJsvMFdFruN4urA&s"
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
                    <button type="button" class="add-to-cart-btn" disabled aria-disabled="true">Agregar al
                        Carrito</button>
                </div>
            </div>

            <!-- Producto 5 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://m.media-amazon.com/images/I/71ZpqzTlZrL._AC_SL1500_.jpg"
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
                    <button type="button" class="add-to-cart-btn" disabled aria-disabled="true">Agregar al
                        Carrito</button>
                </div>
            </div>

            <!-- Producto 6 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://http2.mlstatic.com/D_NQ_NP_925898-MLA96080197057_102025-O.webp" alt="Webcam Full HD"
                        class="product-image">
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
                    <button type="button" class="add-to-cart-btn" disabled aria-disabled="true">Agregar al
                        Carrito</button>
                </div>
            </div>

            <!-- Producto 7 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://http2.mlstatic.com/D_NQ_NP_795471-MCO49868204742_052022-O.webp" alt="Mousepad XXL"
                        class="product-image">
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
                    <button type="button" class="add-to-cart-btn" disabled aria-disabled="true">Agregar al
                        Carrito</button>
                </div>
            </div>

            <!-- Producto 8 -->
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://http2.mlstatic.com/D_NQ_NP_744604-MLU71551272271_092023-O.webp" alt="Hub USB 3.0"
                        class="product-image">
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
                    <button type="button" class="add-to-cart-btn" disabled aria-disabled="true">Agregar al
                        Carrito</button>
                </div>
            </div>
        </div>
    </div>

@endsection
  