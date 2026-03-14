<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private $userId = 1; // Temporal: usuario fijo mientras no haya Login

    public function index()
    {
        $cartItems = CartItem::with('product')
                        ->where('user_id', $this->userId)
                        ->get();

        $total = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);

        return view('cart.index', compact('cartItems', 'total'));
    }

    public function add(Request $request, Product $product)
    {
        $cartItem = CartItem::where('user_id', $this->userId)
                            ->where('product_id', $product->id)
                            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
        } else {
            CartItem::create([
                'user_id'    => $this->userId,
                'product_id' => $product->id,
                'quantity'   => 1,
            ]);
        }

        return redirect()->back()->with('cart_success', '¡Producto agregado al carrito!');
    }

    public function remove(CartItem $cartItem)
    {
        $cartItem->delete();
        return redirect()->route('cart.index')->with('cart_success', 'Producto eliminado del carrito.');
    }
}

