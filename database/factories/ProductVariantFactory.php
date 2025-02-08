<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVariant>
 */
class ProductVariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => mt_rand(1, 10),
            'color_id' => mt_rand(1, 10),
            'size_id' => mt_rand(1, 4),
            'stock' => mt_rand(20, 100),
        ];
    }
}
