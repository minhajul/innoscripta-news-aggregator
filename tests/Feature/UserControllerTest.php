<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\Preference;
use App\Models\User;
use Illuminate\Http\Response;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    protected User $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = $this->getUser();
    }

    public function test_it_returns_user_details()
    {
        Sanctum::actingAs($this->user);

        $response = $this
            ->getJson('/api/user');

        $response
            ->assertStatus(Response::HTTP_OK)
            ->assertJson([
                'success' => true,
            ]);
    }

    public function test_it_returns_preferred_articles_for_user()
    {
        Sanctum::actingAs($this->user);

        $response = $this
            ->getJson('/api/user');

        $response
            ->assertStatus(Response::HTTP_OK)
            ->assertJson([
                'success' => true,
            ]);
    }

    public function test_no_preferences_found()
    {
        Sanctum::actingAs($this->user);

        $response = $this->getJson('/api/user/preferred/articles');

        $response->assertStatus(Response::HTTP_NOT_FOUND);
    }

    public function test_no_articles_found()
    {
        Preference::factory()->create([
            'user_id' => $this->user->id,
            'source' => 'Test Source',
            'category' => 'Test Category',
            'author' => 'Test Author',
        ]);

        Sanctum::actingAs($this->user);

        $response = $this->getJson('/api/user/preferred/articles');

        $response->assertStatus(Response::HTTP_NOT_FOUND);
    }

    public function test_articles_returned_successfully()
    {
        Preference::factory()->create([
            'user_id' => $this->user->id,
            'source' => 'Test Source',
            'category' => 'Test Category',
            'author' => 'Test Author',
        ]);

        Article::factory()->create([
            'source' => 'Test Source',
            'category' => 'Test Category',
            'author' => 'Test Author',
        ]);

        Sanctum::actingAs($this->user);

        $response = $this->getJson('/api/user/preferred/articles');

        $response->assertStatus(Response::HTTP_OK);
    }
}
