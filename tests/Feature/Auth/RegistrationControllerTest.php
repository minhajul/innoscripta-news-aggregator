<?php

namespace Tests\Feature\Auth;

use Illuminate\Http\Response;
use Tests\TestCase;

class RegistrationControllerTest extends TestCase
{
    public function test_registers_a_user_and_returns_a_token()
    {
        $response = $this->postJson('/api/register', [
            'name' => 'John Doe',
            'email' => 'test@example.com',
            'password' => 'Pass-12M#12',
            'password_confirmation' => 'Pass-12M#12',
        ]);

        $response->assertStatus(Response::HTTP_OK);

        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'email' => 'test@example.com',
        ]);

        $this->assertNotNull($response->json('access_token'));
    }
}
