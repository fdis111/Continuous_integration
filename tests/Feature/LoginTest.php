<?php

namespace Tests\Feature;

use App\Http\Controllers\TestController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/toto/2');
        $response->assertStatus(200);
        $response->assertJson([]);
        $this->assertJsonStringEqualsJsonString(json_encode(["params" => "2"]), $response->content());
    }
    public function test_index(){
        $test = new TestController();
        $request = new Request();
        $result = $test->index($request, 5);
        $this->assertTrue(false);
        $this->assertJsonStringEqualsJsonString(json_encode(["params" => 5]), $result->content());
    }
}
