<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Player;
use App\Models\Season;
use App\Models\Set;
use App\Models\Team;
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
            ->for(Team::factory()->create(), 'cardTeam')
            ->for(Team::factory()->create(), 'draftTeam')
            ->has(Season::factory()->count(2)
                ->for(Team::factory()->create()))
            ->create();
        Player::factory()
            ->count(1)
            ->for(Set::factory()->create())
            ->has(Season::factory()->count(3)
                ->for(Team::factory()->create()))
            ->create();
        Player::factory()
            ->count(2)
            ->for(Set::factory()->create())
            ->has(Season::factory()->count(1)
                ->for(Team::factory()->create()))
            ->create();

        // Sets

        // Seasons

        // Team

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
