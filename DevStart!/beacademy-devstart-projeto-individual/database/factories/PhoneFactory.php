<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phone>
 */
class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'phone'         => $this->faker->phoneNumber,
            'description'   => $this->faker->paragraph,
            'user_id'       => User::All()->random()->id,
            'created_at'    => now(),
            'updated_at'    => now(),
        ];
    }
}
