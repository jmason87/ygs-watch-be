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
            'plus_minus' => fake()->randomDigit(),
            'player_uuid' => fake()->uuid(),
            'games_started' => fake()->randomDigit(),
            'wins' => fake()->randomDigit(),
            'losses' => fake()->randomDigit(),
            'overtime_losses' => fake()->randomDigit(),
            'goals_against' => fake()->randomDigit(),
            'goals_against_average' => fake()->randomDigit(),
            'save_percentage' => fake()->randomDigit(),
            'shutouts' => fake()->randomDigit(),
        ];    
    }
}
