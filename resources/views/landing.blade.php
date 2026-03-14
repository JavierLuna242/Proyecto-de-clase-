@extends('product.Layout.app')

@section('content')

<div class="container">

    <!-- HERO / PRESENTACIÓN -->
    <div class="hero-section">

        <h1 class="section-title">Bienvenido a ProShop</h1>

        <p style="max-width:700px; margin:auto; margin-bottom:25px;">
            En ProShop encontrarás tecnología, accesorios y productos de alta calidad 
            al mejor precio del mercado. Trabajamos con las mejores marcas para ofrecer 
            seguridad, garantía y envíos rápidos a todo el país.
        </p>

        <a href="{{ route('product.index') }}" class="add-to-cart-btn">
            Explorar Productos
        </a>

    </div>


    <!-- CATEGORÍAS -->

    <div style="margin-top:60px;">

        <h2 class="section-title">Categorías populares</h2>

        <div class="products-grid">

            <div class="product-card">
                <div class="product-content">
                    <h3>💻 Computadores</h3>
                    <p>Equipos de alto rendimiento para trabajo y gaming.</p>
                    <a href="{{ route('product.index') }}" class="add-to-cart-btn">
                        Ver productos
                    </a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-content">
                    <h3>🎧 Accesorios</h3>
                    <p>Audífonos, teclados, mouse y accesorios tecnológicos.</p>
                    <a href="{{ route('product.index') }}" class="add-to-cart-btn">
                        Ver productos
                    </a>
                </div>
            </div>

            <div class="product-card">
                <div class="product-content">
                    <h3>📱 Smartphones</h3>
                    <p>Los últimos modelos del mercado al mejor precio.</p>
                    <a href="{{ route('product.index') }}" class="add-to-cart-btn">
                        Ver productos
                    </a>
                </div>
            </div>

        </div>

    </div>


    <!-- BENEFICIOS -->

    <div style="margin-top:70px;">

        <h2 class="section-title">¿Por qué comprar en ProShop?</h2>

        <div class="products-grid">

            <div class="product-card">
                <div class="product-content">
                    <h3>🚚 Envíos rápidos</h3>
                    <p>Realizamos envíos seguros y rápidos a todo el país con seguimiento en tiempo real.</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-content">
                    <h3>💳 Pagos seguros</h3>
                    <p>Contamos con múltiples métodos de pago protegidos para tu tranquilidad.</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-content">
                    <h3>⭐ Productos de calidad</h3>
                    <p>Seleccionamos productos de las mejores marcas del mercado.</p>
                </div>
            </div>

        </div>

    </div>


    <!-- PRODUCTOS POPULARES -->

    <div style="margin-top:70px;">

        <h2 class="section-title">Productos populares</h2>

        <div class="products-grid">

            @foreach ($products->take(3) as $product)

            <div class="product-card">

                <div class="product-image-wrapper">

                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" 
                             alt="{{ $product->name }}"
                             class="product-image">
                    @else
                        <img src="https://exitocol.vtexassets.com/arquivos/ids/31725643/Computador-Gaming-HP-Omen-Gaming-Intel-Core-Ultra-7-155H-RAM-16-GB-1-TB-SSD-14-fb0001la-3568707_a.jpg?v=638984923323400000"
                             class="product-image">
                    @endif

                </div>

                <div class="product-content">

                    <div class="product-name">
                        {{ $product->name }}
                    </div>

                    <div class="price-section">
                        <span class="price">
                            ${{ number_format($product->price,2) }}
                        </span>
                    </div>

                    <a href="{{ url('/product/'.$product->id) }}" class="add-to-cart-btn">
                        Ver producto
                    </a>

                </div>

            </div>

            @endforeach

        </div>

    </div>


    <!-- LLAMADA A LA ACCIÓN -->

    <div style="text-align:center; margin-top:80px;">

        <h2 class="section-title">Explora nuestro catálogo completo</h2>

        <p style="margin-bottom:20px;">
            Tenemos muchos más productos disponibles en nuestro catálogo.
        </p>

        <a href="{{ route('product.index') }}" class="add-to-cart-btn">
            Ver todos los productos
        </a>

    </div>

</div>

@endsection
