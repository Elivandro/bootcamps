<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'address'       => $this->faker->address(),
            'district'      => $this->faker->name(),
            'zip_code'      => $this->faker->PostCode(), 
            'city'          => $this->faker->city(),
            'state'         => $this->faker->state(),
            'country'       => $this->faker->country(),
            'user_id'       => User::All()->random()->id,
            'created_at'    => now(),
            'updated_at'    => now(),
        ];

    }
}
