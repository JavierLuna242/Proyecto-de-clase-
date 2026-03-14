<?php

namespace App\Http\Controllers;

use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(5)->get();
        $totalProducts = Product::count();
        $topProducts = Product::take(4)->get();

        return view('admin.index', compact('products', 'totalProducts', 'topProducts'));
    }
}
