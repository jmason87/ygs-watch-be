<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'position' => fake()->word(),
            'height' => fake()->randomDigit(),
            'weight' => fake()->randomDigit(),
            'card_team_uuid' => fake()->uuid(),
            'birthdate' => fake()->date('Y_m_d'),
            'age' => fake()->randomNumber(2, true),
            'year_drafted' => fake()->year(),
            'round' => fake()->randomDigit(),
            'round_pick' => fake()->randomDigit(),
            'set_uuid' => fake()->uuid(),
            'draft_team_uuid' => fake()->uuid(),
        ];
    }
}
