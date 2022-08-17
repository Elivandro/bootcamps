<?php

namespace Database\Factories;

use app\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'postal_code' => $this->faker->postcode(),
            'district' => $this->faker->city(),
            'address' => $this->faker->address(),
            'number' => $this->faker->numerify('###'),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'state' => $this->faker->state(),
            'user_id' => User::All()->random()->id,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
