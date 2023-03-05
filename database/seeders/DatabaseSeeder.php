<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Player;
use App\Models\Set;
use App\Models\Season;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Players
        Player::factory()
            ->count(2)
            ->for(Set::factory()->create())
            ->create();

        Player::factory()
            ->count(2)
            ->for(Set::factory()->create())
            ->create();

        // Sets

        // Seasons
        Season::factory()
            ->count(5)
            ->create();


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
