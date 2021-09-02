<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/test');
        $response->assertStatus(200);
        $response->assertSee('mes tests fonctionnels');
        $response->assertDontSee('coucou');
    }
}
