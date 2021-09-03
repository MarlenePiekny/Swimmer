<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FirstTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_displayPiscinePage()
    {
        $response = $this->get('/piscine');
        $response->assertStatus(500);
        $response->assertSeeText("Piscine");
    }
}
