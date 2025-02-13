<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'street_address' => fake()->streetAddress(),
            'city' => fake()->city(),
            'country_name' => fake()->country(),
            'size' => fake()->word(),
            'website' => fake()->url(),
            'biography' => fake()->words(25, true),
            'user_id' => 1
        ];
    }
}
