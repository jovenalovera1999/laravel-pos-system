<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_code' => fake()->randomNumber(),
            'product_name_id' => fake()->numberBetween(1, 14),
            'quantity' => fake()->numberBetween(10, 100),
            'price' => fake()->randomFloat(null, 25.25, 250.75),
            'category_id' => fake()->numberBetween(1, 9),
            'supplier_id' => fake()->numberBetween(1, 4),
        ];
    }
}
