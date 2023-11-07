<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testSee(): void
    {
        $wanted = "Laravel";
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee($wanted);
    }

    public function testDoesntSee(): void
    {
        $wanted = "<meta charset=\"utf-18\">";
        $response = $this->get('/');
        $response->assertStatus(200);
        //html kódrészlet keresése miatt fontos a 2-ik paraméter
        $response->assertDoesntSee($wanted, false);
    }
}
