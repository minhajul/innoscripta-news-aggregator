<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Password;
use Tests\TestCase;

class PasswordResetControllerTest extends TestCase
{
    public function test_sends_a_reset_link_if_email_exists()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
        ]);

        Password::shouldReceive('sendResetLink')
            ->once()
            ->with(['email' => $user->email])
            ->andReturn(Password::RESET_LINK_SENT);

        $response = $this->postJson('/api/password/email', [
            'email' => $user->email,
        ]);

        $response->assertStatus(Response::HTTP_OK)
            ->assertJson(['message' => __('passwords.sent')]);
    }

    public function test_returns_error_if_email_does_not_exist()
    {
        $response = $this->postJson('/api/password/email', [
            'email' => 'nonexistent@example.com',
        ]);

        $response->assertStatus(Response::HTTP_NOT_FOUND)
            ->assertJson([
                'success' => false,
                'message' => 'We can not find any account with this email',
                'data' => null,
            ]);
    }

    public function test_validates_the_email_field()
    {
        $response = $this->postJson('/api/password/email', [
            'email' => 'not-an-email',
        ]);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY)
            ->assertJsonValidationErrors(['email']);
    }

    public function test_resets_the_password_with_valid_token()
    {
        $user = User::factory()->create(['email' => 'test@example.com']);

        Password::shouldReceive('reset')
            ->once()
            ->andReturn(Password::PASSWORD_RESET);

        $response = $this->postJson('/api/password/reset', [
            'email' => $user->email,
            'password' => 'new-password',
            'password_confirmation' => 'new-password',
            'token' => 'valid-token',
        ]);

        $response->assertStatus(Response::HTTP_OK)
            ->assertJson(['message' => __('passwords.reset')]);
    }

    public function test_returns_error_with_invalid_token()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'email_verified_at' => now(),
        ]);

        Password::shouldReceive('reset')
            ->once()
            ->andReturn(Password::INVALID_TOKEN);

        $response = $this->postJson('/api/password/reset', [
            'email' => $user->email,
            'password' => 'new-password',
            'password_confirmation' => 'new-password',
            'token' => 'invalid-token',
        ]);

        $response->assertStatus(Response::HTTP_BAD_REQUEST)
            ->assertJson(['message' => __('passwords.token')]);
    }

    public function test_validates_the_reset_password_request()
    {
        $response = $this->postJson('/api/password/reset', [
            'email' => '',
            'password' => 'new-password',
            'password_confirmation' => 'different-password',
            'token' => '',
        ]);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    public function test_reset_password_request_returns_error_if_email_does_not_exist()
    {
        $response = $this->postJson('/api/password/reset', [
            'email' => 'nonexistent@example.com',
            'password' => 'new-password',
            'password_confirmation' => 'new-password',
            'token' => 'valid-token',
        ]);

        $response->assertStatus(Response::HTTP_NOT_FOUND)
            ->assertJson([
                'success' => false,
                'message' => 'We can not find any account with this email',
            ]);
    }
}
