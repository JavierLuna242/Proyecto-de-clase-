@extends('product.Layout.app')

@section('title', 'Mi Carrito - ProShop')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endpush

@section('content')

    <div class="banner">
        🛒 Tu Carrito de Compras — Todo lo que necesitas en un solo lugar
    </div>

    <div class="container">

        @if(session('cart_success'))
            <div class="cart-alert-success">
                <span>✅</span> {{ session('cart_success') }}
            </div>
        @endif

        @if($cartItems->isEmpty())
            <div class="cart-empty">
                <span class="cart-empty-icon">🛒</span>
                <h2>Tu carrito está vacío</h2>
                <p>Agrega productos desde la tienda para empezar.</p>
                <a href="{{ route('product.index') }}" class="add-to-cart-btn" style="text-decoration: none; display: inline-block;">
                    Ver Productos
                </a>
            </div>
        @else
            <h1 class="section-title">Mi Carrito</h1>

            <div class="cart-wrapper">

                {{-- LISTA DE PRODUCTOS --}}
                <div>
                    @foreach($cartItems as $item)
                        <div class="cart-item">
                            @if($item->product->image)
                                <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}" class="cart-item-image">
                            @else
                                <img src="https://exitocol.vtexassets.com/arquivos/ids/31725643/Computador-Gaming-HP-Omen-Gaming-Intel-Core-Ultra-7-155H-RAM-16-GB-1-TB-SSD-14-fb0001la-3568707_a.jpg" alt="{{ $item->product->name }}" class="cart-item-image">
                            @endif

                            <div class="cart-item-info">
                                <div class="cart-item-name">{{ $item->product->name }}</div>
                                <div class="cart-item-desc">{{ Str::limit($item->product->description, 70) }}</div>
                                <span class="cart-item-qty">Cantidad: {{ $item->quantity }}</span>
                            </div>

                            <div class="cart-item-price-block">
                                <div class="cart-item-total">${{ number_format($item->product->price * $item->quantity, 2) }}</div>
                                <div class="cart-item-unit">${{ number_format($item->product->price, 2) }} c/u</div>
                                <form action="{{ route('cart.remove', $item) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="cart-remove-btn">🗑 Eliminar</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- PANEL TOTAL --}}
                <div class="cart-summary">
                    <h2>Resumen del Pedido</h2>

                    <div class="cart-summary-row">
                        <span>Subtotal ({{ $cartItems->count() }} artículos)</span>
                        <span>${{ number_format($total, 2) }}</span>
                    </div>
                    <div class="cart-summary-row shipping">
                        <span>🚚 Envío</span>
                        <span>Gratis</span>
                    </div>

                    <div class="cart-summary-total">
                        <span>Total</span>
                        <span>${{ number_format($total, 2) }}</span>
                    </div>

                    <button type="button" class="cart-checkout-btn">✅ Proceder al Pago</button>
                    <a href="{{ route('product.index') }}" class="cart-continue-link">← Seguir comprando</a>
                </div>

            </div>
        @endif
    </div>

@endsection
