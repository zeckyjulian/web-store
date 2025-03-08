<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Models\Category;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'index']);
Route::get('/home',function () {return redirect('/');}, [ProductController::class, 'index']);

Route::get('/product', [ProductController::class, 'product']);

Route::get('/product-detail/{product:slug}', [ProductController::class, 'product_detail']);

Route::get('/shopping-cart', function () {
    return view('shopping-cart', [
        'active' => 'shopping-cart',
        'title' => 'Shopping Cart'
    ]);
});

Route::get('/features', function () {
    return view('features', [
        'active' => 'features',
        'title' => 'Features',
        'categories' => Category::all()
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

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'store']);