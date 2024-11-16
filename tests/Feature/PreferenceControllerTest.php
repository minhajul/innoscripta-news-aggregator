<?php

namespace Tests\Feature;

use App\Models\Preference;
use App\Models\User;
use Tests\TestCase;

class PreferenceControllerTest extends TestCase
{
    private User $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = $this->getUser();
    }

    public function test_index_returns_user_preferences()
    {
        Preference::factory()->count(5)->create([
            'user_id' => $this->user->id,
        ]);

        $response = $this->actingAs($this->user)
            ->getJson('api/preferences');

        $response->assertStatus(200);

        $this->assertCount(5, $response->json('data'));
    }

    public function test_index_returns_404_when_user_has_no_preferences()
    {
        $response = $this->actingAs($this->user)
            ->getJson('api/preferences');

        $response->assertStatus(404);
    }

    public function test_store_creates_a_new_preference()
    {
        $data = [
            'source' => 'example.com',
            'category' => 'technology',
            'author' => 'John Doe',
        ];

        $response = $this->actingAs($this->user)
            ->postJson('api/preferences/create', $data);

        $response->assertStatus(200)
            ->assertJson([
                'success' => true,
                'data' => $data,
            ]);

        $this->assertDatabaseHas('preferences', $data + ['user_id' => $this->user->id]);
    }

    public function test_show_returns_preference()
    {
        $preference = Preference::factory()->create(['user_id' => $this->user->id]);

        $response = $this->actingAs($this->user)
            ->getJson("api/preferences/$preference->id");

        $response->assertStatus(200);
    }

    public function test_update_modifies_a_preference()
    {
        $preference = Preference::factory()->create([
            'user_id' => $this->user->id,
        ]);

        $data = [
            'source' => 'updated.com',
            'category' => 'science',
            'author' => 'Jane Smith',
        ];

        $response = $this->actingAs($this->user)
            ->putJson("api/preferences/$preference->id/update", $data);

        $response->assertStatus(200);
    }

    public function test_destroy_deletes_a_preference()
    {
        $preference = Preference::factory()->create([
            'user_id' => $this->user->id,
        ]);

        $response = $this->actingAs($this->user)
            ->deleteJson("api/preferences/$preference->id");

        $response->assertStatus(200);

        $this->assertDatabaseMissing('preferences', ['id' => $preference->id]);
    }
}
