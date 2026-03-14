@extends('product.Layout.app')

@section('title', 'Productos - ProShop')

@section('content')

    <div class="banner">
        ✨ Mega Ofertas del Mes - Descuentos hasta 50% - Envío Gratis en compras mayores a $50 ✨
    </div>

    <div class="container">
        
        @if(session('cart_success'))
            <div style="background: rgba(34,197,94,0.15); border: 1px solid rgba(34,197,94,0.4); color: #4ade80; padding: 14px 20px; border-radius: 12px; margin-bottom: 24px; font-weight: 500;">
                ✅ {{ session('cart_success') }}
            </div>
        @endif
        
        <h1 class="section-title">Productos Destacados</h1>
        <div class="products-grid">
            @foreach ($misProductos as $product)
                <!-- Producto 1 -->
                <div class="product-card">
                    <div class="product-image-wrapper">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Laptop Ultra Gaming"
                                class="product-image">
                        @else
                            <img src="https://exitocol.vtexassets.com/arquivos/ids/31725643/Computador-Gaming-HP-Omen-Gaming-Intel-Core-Ultra-7-155H-RAM-16-GB-1-TB-SSD-14-fb0001la-3568707_a.jpg?v=638984923323400000"
                                alt="Laptop Ultra Gaming" class="product-image">
                        @endif
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
                        <form action="{{ route('cart.add', $product) }}" method="POST" style="width: 100%;">
                            @csrf
                            <button type="submit" class="add-to-cart-btn" style="width: 100%; text-align: center; margin-top: 10px;">
                                Agregar al Carrito
                            </button>
                        </form>
                        <a href="{{ route('product.show', $product) }}" class="add-to-cart-btn" style="text-decoration: none; display: block; text-align: center; margin-top: 10px; width: 100%; box-sizing: border-box;">Ver Detalles</a>
                        <form action="{{ route('product.destroy', $product) }}" method="POST" style="width: 100%;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="add-to-cart-btn" style="margin-top: 10px; width: 100%; text-align: center;">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
