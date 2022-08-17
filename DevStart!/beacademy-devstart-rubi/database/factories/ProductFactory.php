<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(2),
            'category_id' => Category::All()->random()->id,
            'quantity' => $this->faker->numberBetween(1, 99),
            'cost_price' => $this->faker->randomFloat(2, 100, 900),
            'sale_price' => $this->faker->randomFloat(2, 1000, 2.000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
