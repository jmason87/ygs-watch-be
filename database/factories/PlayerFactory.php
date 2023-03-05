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
            'age' => fake()->randomNumber(2, true),
            'birthdate' => fake()->date('Y_m_d'),
            'year_drafted' => fake()->year(),
            'round' => fake()->randomDigit(),
            'pick' => fake()->randomDigit(),
            'set_uuid' => fake()->uuid(),
        ];
    }
}
