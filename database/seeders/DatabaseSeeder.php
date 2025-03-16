<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Product;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;
use App\Models\ProductVariant;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Admin::factory(1)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // User::create([
        //     'name' => 'Julian',
        //     'email' => 'julian@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);

        Category::create([
            'category_name' => 'Men',
            'image' => 'banner-02.jpg',
            'slug' => 'men',
        ]);

        Category::create([
            'category_name' => 'Women',
            'image' => 'banner-01.jpg',
            'slug' => 'women',
        ]);

        Category::create([
            'category_name' => 'Shoes',
            'image' => 'banner-10.jpg',
            'slug' => 'shoes',
        ]);

        Category::create([
            'category_name' => 'Bags',
            'image' => 'banner-08.jpg',
            'slug' => 'bags',
        ]);

        Product::factory(25)->create();

        Color::factory(10)->create();

        Size::create([
            'size_name' => 'S',
        ]);

        Size::create([
            'size_name' => 'M',
        ]);

        Size::create([
            'size_name' => 'L',
        ]);

        Size::create([
            'size_name' => 'XL',
        ]);

        ProductVariant::factory(30)->create();

        // $product = Product::create([
        //     'product_name' => 'Esprit Ruffle Shirt',
        //     'category_id' => 2,
        //     'slug' => 'esprit-ruffle-shirt',
        //     'price' => 16.64,
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente dolores quod maxime iusto, alias mollitia cupiditate eum tempora maiores ducimus accusamus omnis repudiandae impedit excepturi accusantium tenetur laborum distinctio porro.',
        //     'image' => 'product-01.jpg',
        // ]);
        
        // $color = Color::create([
        //     'color_name' => 'White',
        // ]);
        
        // $size = Size::create([
        //     'size_name' => 'S',
        // ]);
        
        // $product->variants()->create([
        //     'color_id' => $color->id,
        //     'size_id' => $size->id,
        //     'stock' => 20,
        // ]);

        // $product = Product::create([
        //     'product_name' => 'Herschel supply',
        //     'category_id' => 2,
        //     'slug' => 'herschel-supply',
        //     'price' => 35.31,
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente dolores quod maxime iusto, alias mollitia cupiditate eum tempora maiores ducimus accusamus omnis repudiandae impedit excepturi accusantium tenetur laborum distinctio porro.',
        //     'image' => 'product-02.jpg',
        // ]);
        
        // $color = Color::find(1);
        
        // $size = Size::create([
        //     'size_name' => 'M',
        // ]);
        
        // $product->variants()->create([
        //     'color_id' => $color->id,
        //     'size_id' => $size->id,
        //     'stock' => 30,
        // ]);

        // $product = Product::create([
        //     'product_name' => 'Only Check Trouser',
        //     'category_id' => 1,
        //     'slug' => 'only-check-trouser',
        //     'price' => 25.50,
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente dolores quod maxime iusto, alias mollitia cupiditate eum tempora maiores ducimus accusamus omnis repudiandae impedit excepturi accusantium tenetur laborum distinctio porro.',
        //     'image' => 'product-03.jpg',
        // ]);
        
        // $color = Color::create([
        //     'color_name' => 'Light Blue',
        // ]);
        
        // $size = Size::create([
        //     'size_name' => 'L',
        // ]);
        
        // $product->variants()->create([
        //     'color_id' => $color->id,
        //     'size_id' => $size->id,
        //     'stock' => 35,
        // ]);

        // $product = Product::create([
        //     'product_name' => 'Converse All Star Hi Plimsolls',
        //     'category_id' => 3,
        //     'slug' => 'converse-all-star-hi-plimsolls',
        //     'price' => 75.00,
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente dolores quod maxime iusto, alias mollitia cupiditate eum tempora maiores ducimus accusamus omnis repudiandae impedit excepturi accusantium tenetur laborum distinctio porro.',
        //     'image' => 'product-09.jpg',
        // ]);
        
        // $color = Color::create([
        //     'color_name' => 'Black',
        // ]);
        
        // $size = Size::create([
        //     'size_name' => 'XL',
        // ]);
        
        // $product->variants()->create([
        //     'color_id' => $color->id,
        //     'size_id' => $size->id,
        //     'stock' => 20,
        // ]);
    }
}
