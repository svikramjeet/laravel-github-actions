<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Factory as Faker;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testCreateUserWithRoute()
    {
        // Given a user want to register
        // When they add name ,email, password and try to save
        // Then a user will be created in the backend
        // And the information they have entered will be stored against them
    }
}
