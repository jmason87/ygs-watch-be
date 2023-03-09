<?php

namespace Tests\Unit;

use App\Http\Controllers\SetController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SetControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_route_ok()
    {
        // Make a request to the index method
        $response = $this->get('/sets');
        // Assert that the response is successful
        $response->assertOk();

    }
}
