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
    public function test_first()
    {
        $response = $this->get('/piscine');
        $response->assertSeeText("Piscine");
    }
}
