<?php

namespace Tests\Unit;

use App\Models\Set;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
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

    public function test_show_route_ok()
    {
        $set = Set::factory()->create();
        // Make a request to the show method
        $response = $this->get("/sets/$set->uuid");
        // Assert that the response is successful
        $response->assertOk();
    }

    public function test_store_route_ok()
    {
        $payload = [
            'name' => 'test set',
            'year' => '2021',
        ];
        // Make a request to the store method
        $response = $this->post('/sets', $payload);
        // Assert that the response is successful
        $response->assertOk();
    }

    public function test_update_route_ok()
    {
        $set = Set::factory()->create();
        $updated_set = [
            'name' => 'test set',
            'year' => '2022',
        ];
        // Make a request to the update method
        $response = $this->put("/sets/$set->uuid", $updated_set);
        // Assert that the response is successful
        $response->assertOk();
    }

    public function test_delete_route_ok()
    {
        $set = Set::factory()->create();
        // Make a request to the destroy method
        $response = $this->delete("/sets/$set->uuid");
        // Assert that the response is successful
        $response->assertOk();
    }
}
