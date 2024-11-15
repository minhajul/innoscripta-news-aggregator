<?php

namespace App\Services;

use App\Models\Article;
use Exception;
use Illuminate\Support\Facades\Http;

class BBCArticles implements NewsAggregatorServiceInterface
{
    /**
     * @throws Exception
     */
    public function fetchArticles(string $query, int $limit): void
    {
        try {
            $response = Http::get("https://feeds.bbci.co.uk/news/$query/rss.xml");

            if ($response->successful()) {
                $this->storeArticles(simplexml_load_string($response->body()), $query);
            } else {
                throw new Exception('Error fetching articles from BBC');
            }
        } catch (Exception $e) {
            throw new Exception('Failed to fetch articles: '.$e->getMessage());
        }
    }

    public function storeArticles($articles, $category): void
    {
        foreach ($articles->channel->item as $article) {
            Article::updateOrCreate(
                ['url' => (string) $article->link],
                [
                    'title' => (string) $article->title,
                    'content' => (string) $article->description,
                    'description' => (string) $article->description,
                    'url' => (string) $article->link,
                    'source' => 'BBC',
                    'category' => $category,
                    'author' => (string) $article->author ?: 'Unknown',
                ]
            );
        }
    }
}
