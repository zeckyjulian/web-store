<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'active' => 'home',
        'title' => 'Home'
    ]);
});

Route::get('/product', function () {
    return view('product', [
        'active' => 'product',
        'title' => 'Shop'
    ]);
});

Route::get('/product-detail', function () {
    return view('product-detail', [
        'active' => 'product-detail',
        'title' => 'Product Detail'
    ]);
});

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