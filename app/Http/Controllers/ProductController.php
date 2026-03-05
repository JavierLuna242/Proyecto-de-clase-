<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productList = Product::limit(10)->get();

        return view('product.index', [
            'misProductos' => $productList
        ]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function show($producto)
    {
        return view('product.show');
    }
}
