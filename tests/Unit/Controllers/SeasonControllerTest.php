<?php

namespace Tests\Unit;

use App\Models\Season;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Tests\TestCase;

class SeasonControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_route_ok()
    {
        // Make a request to the index method
        $response = $this->get('/seasons');
        // Assert that the response is successful
        $response->assertOk();
    }

    public function test_show_route_ok()
    {
        $season = Season::factory()->create();
        // Make a request to the show method
        $response = $this->get("/seasons/$season->uuid");
        // Assert that the response is successful
        $response->assertOk();
    }

    public function test_store_route_ok()
    {
        $payload = [
            'year' => '2020',
            'team_uuid' => '00000000-0000-0000-0000-000000000001',
            'games_played' => 25,
            'goals' => 5,
            'assists' => 6,
            'points' => 11,
            'player_uuid' => '00000000-0000-0000-0000-000000000002',
        ];
        // Make a request to the store method
        $response = $this->post('/seasons', $payload);
        // Assert that the response is successful
        $response->assertOk();
    }

    public function test_update_route_ok()
    {
        $season = Season::factory()->create();
        $updated_season = [
            'year' => '2021',
            'team_uuid' => '00000000-0000-0000-0000-002000000001',
            'player_uuid' => '00000000-0000-0000-0000-000004000002',
            'games_played' => 10,
            'goals' => 50,
            'assists' => 9,
            'points' => 59,
        ];
        // Make a request to the update method
        $response = $this->put("/seasons/$season->uuid", $updated_season);
        // Assert that the response is successful
        $response->assertOk();
    }

    public function test_delete_route_ok()
    {
        $season = Season::factory()->create();
        // Make a request to the destroy method
        $response = $this->delete("/seasons/$season->uuid");
        // Assert that the response is successful
        $response->assertOk();
    }
}
