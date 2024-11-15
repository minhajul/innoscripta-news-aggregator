<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    public function test_validation_errors()
    {
        $response = $this->json('POST', '/api/login');

        $response->assertStatus(422)
            ->assertJson([
                'success' => false,
                'data' => [
                    'email' => ['The email field is required.'],
                    'password' => ['The password field is required.'],
                ],
            ]);
    }

    public function test_user_not_found()
    {
        $response = $this->json('POST', '/api/login', [
            'email' => 'nonexistent@example.com',
            'password' => 'password',
        ]);

        $response->assertStatus(400)
            ->assertJson([
                'success' => false,
                'data' => 'We could not find any account with this email!',
            ]);
    }

    public function test_incorrect_password()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('correct-password'),
        ]);

        $response = $this->json('POST', '/api/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $response->assertStatus(401)
            ->assertJson([
                'success' => false,
                'data' => 'Credential does not match',
            ]);
    }

    public function test_successful_login()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('correct-password'),
        ]);

        $response = $this->json('POST', '/api/login', [
            'email' => $user->email,
            'password' => 'correct-password',
        ]);

        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'data' => [
                    'id' => $user->id,
                    'email' => $user->email,
                ],
            ]);

        $this->assertArrayHasKey('access_token', $response->json());
    }

    public function test_logs_out_the_authenticated_user()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $user->createToken('Test Token 1');
        $user->createToken('Test Token 2');

        $this->assertDatabaseCount('personal_access_tokens', 2);

        $response = $this->postJson('/api/logout');

        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'data' => null,
            ]);

        $this->assertDatabaseCount('personal_access_tokens', 0);
    }
}
