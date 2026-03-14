<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::prefix('cart')->controller(CartController::class)->group(function () {
    Route::get('/', 'index')->name('cart.index');
    Route::post('/add/{product}', 'add')->name('cart.add');
    Route::delete('/remove/{cartItem}', 'remove')->name('cart.remove');
});


Route::prefix('product')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('product.index');
    Route::get('/create', 'create');
    Route::post('/store', 'store')->name('product.store');
    Route::get('/{producto}', 'show')->name('product.show');
    Route::delete('/{producto}', 'destroy')->name('product.destroy');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('categories', CategoryController::class)->names('admin.categories');
});
