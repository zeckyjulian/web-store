<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index']);
Route::get('/home', [ProductController::class, 'index']);

Route::get('/product', function () {
    return view('product', [
        'active' => 'product',
        'title' => 'Shop'
    ]);
});

Route::get('/product-detail/{id}', [ProductController::class, 'product_detail']);

// Route::get('/product-detail/{id}', function ($id) {
//     return view('product-detail', [
//         'active' => 'product-detail',
//         'title' => 'Product Detail',
//         'product' => Product::find($id)
//     ]);
// });

Route::get('/shopping-cart', function () {
    return view('shopping-cart', [
        'active' => 'shopping-cart',
        'title' => 'Features'
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'active' => 'blog',
        'title' => 'Blog'
    ]);
});

Route::get('/blog-detail', function () {
    return view('blog-detail', [
        'active' => 'blog-detail',
        'title' => 'Blog-detail'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'active' => 'about',
        'title' => 'About'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'active' => 'contact',
        'title' => 'Contact'
    ]);
});