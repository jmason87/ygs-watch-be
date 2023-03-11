<?php

namespace Tests\Unit;

use App\Models\Player;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Tests\TestCase;

class PlayerControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_route_ok()
    {
        // Make a request to the index method
        $response = $this->get('/players');
        // Assert that the response is successful
        $response->assertOk();
    }

    public function test_show_route_ok()
    {
        $player = Player::factory()->create();
        // Make a request to the show method
        $response = $this->get("/players/$player->uuid");
        // Assert that the response is successful
        $response->assertOk();
    }

    public function test_store_route_ok()
    {
        $payload = [
            'name' => 'test player',
            'position' => 'goalie',
            'age' => 25,
            'birthdate' => '1987/11/12',
            'year_drafted' => '2005',
            'round' => 1,
            'pick' => 1,
            'set_uuid' => '00000000-0000-0000-0000-000000000001',
        ];
        // Make a request to the store method
        $response = $this->post('/players', $payload);
        // Assert that the response is successful
        $response->assertOk();
    }

    public function test_update_route_ok()
    {
        $player = Player::factory()->create();
        $updated_player = [
            'name' => 'test player',
        ];
        // Make a request to the update method
        $response = $this->put("/players/$player->uuid", $updated_player);
        // Assert that the response is successful
        $response->assertOk();
    }

    public function test_delete_route_ok()
    {
        $player = Player::factory()->create();
        // Make a request to the destroy method
        $response = $this->delete("/players/$player->uuid");
        // Assert that the response is successful
        $response->assertOk();
    }
}
