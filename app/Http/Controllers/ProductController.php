<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Color;
use App\Models\Size;
use App\Models\ProductVariant;

class ProductController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'active' => 'home',
            'products' => Product::all()
        ]);
    }

    // public function product_detail($id)
    // {
    //     $product = Product::find($id);
    //     $sizes = json_decode($product->size);
    //     return view('product-detail', [
    //         'active' => 'product-detail',
    //         'title' => 'Product Detail',
    //         'product' => Product::find($id),
    //         'sizes' => $sizes,
    //     ]);
    // }

    public function product_detail($id)
    {
        $product = Product::find($id);
        $product2 = Product::with('variants.color', 'variants.size')->find($id);
        return view('product-detail', [
            'active' => 'product-detail',
            'title' => 'Product Detail',
            'product' => $product
        ]);
    }
}
