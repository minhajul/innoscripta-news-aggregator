<?php

namespace Database\Factories;

use App\Models\Preference;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Preference>
 */
class PreferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'source' => fake()->name(),
            'category' => fake()->word(),
            'author' => fake()->name(),
            'user_id' => User::factory(),
        ];
    }
}
