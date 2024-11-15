<?php

namespace Tests\Feature;

use App\Models\Article;
use Tests\TestCase;

class ArticlesControllerTest extends TestCase
{
    public function test_index_returns_paginated_articles()
    {
        $articles = Article::factory()->count(50)->create();

        $response = $this->getJson("/api/articles");

        $response->assertStatus(200);

        $this->assertCount(30, $response->json('data'));
        $this->assertEquals($articles->count(), $response->json('meta.total'));
    }

    public function test_index_returns_404_when_no_articles_exist()
    {
        $response = $this->getJson("/api/articles/test");

        $response->assertStatus(404);
    }

    public function test_show_returns_single_article()
    {
        $article = Article::factory()->create();

        $response = $this->getJson("/api/articles/$article->slug");

        $response->assertStatus(200);
    }

    public function test_show_returns_404_for_nonexistent_article()
    {
        $response = $this->getJson("/api/articles/no-article");

        $response->assertStatus(404);
    }
}
