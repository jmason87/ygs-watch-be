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
        // Make a request to the index method
        $response = $this->get("/players/$player->uuid");
        // Assert that the response is successful
        $response->assertOk();
    }
}
