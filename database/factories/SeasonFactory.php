<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Season>
 */
class SeasonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'year' => fake()->year(),
            'team_uuid' => fake()->uuid(),
            'games_played' => fake()->randomDigit(),
            'goals' => fake()->randomDigit(),
            'assists' => fake()->randomDigit(),
            'points' => fake()->randomDigit(),
        ];
    }
}
