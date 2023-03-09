<?php

namespace Tests\Unit;

use App\Http\Controllers\PlayerController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
}
