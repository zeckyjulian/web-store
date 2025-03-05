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
            'products' => Product::with(['category'])->latest()->get()
        ]);
    }

    public function product()
    {
        return view('product', [
            'active' => 'product',
            'title' => 'Shop',
            'products' => Product::all()
        ]);
    }

    // public function product_detail($id)
    // {
    //     $product = Product::find($id);
    //     $product2 = Product::with('variants.color', 'variants.size')->find($id);
    //     return view('product-detail', [
    //         'active' => 'product-detail',
    //         'title' => 'Product Detail',
    //         'product' => $product
    //     ]);
    // }

    public function product_detail(Product $product)
    {
        $uniqueColors = $product->variants->unique(function ($variant) {
            return $variant->color->color_name;
        });
        $uniqueSizes = $product->variants->unique(function ($variant) {
            return $variant->size->size_name;
        });
        return view('product-detail', [
            'active' => 'product-detail',
            'title' => 'Product Detail',
            'product' => $product,
            'uniqueColors' => $uniqueColors,
            'uniqueSizes' => $uniqueSizes
        ]);
    }
}
