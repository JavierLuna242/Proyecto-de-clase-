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
            @foreach ($misProductos as $product)
                <!-- Producto 1 -->
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://exitocol.vtexassets.com/arquivos/ids/31725643/Computador-Gaming-HP-Omen-Gaming-Intel-Core-Ultra-7-155H-RAM-16-GB-1-TB-SSD-14-fb0001la-3568707_a.jpg?v=638984923323400000"
                            alt="Laptop Ultra Gaming" class="product-image">
                        <div class="discount-badge"></div>
                        <div class="stock-badge">En Stock</div>
                    </div>
                    <div class="product-content">
                        <div class="product-name">{{ $product->name }}</div>
                        <div class="product-description">{{ $product->description }}</div>
                        <div class="rating">
                            <span class="stars">★★★★★</span>
                            <span class="rating-count">(1,245 reseñas)</span>
                        </div>
                        <div class="price-section">
                            <div class="price">${{ number_format($product->price) }}</div>
                        </div>
                        <div class="delivery-info">🚚 Envío Gratis</div>
                        <button type="button" class="add-to-cart-btn" disabled aria-disabled="true">Agregar al
                            Carrito</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
