<?php

namespace App\Services;

use App\Models\Article;
use Exception;
use Illuminate\Support\Facades\Http;

class TheGuardian implements NewsAggregatorServiceInterface
{
    /**
     * @throws Exception
     */
    public function fetchArticles(string $query, int $limit): void
    {
        try {
            $response = Http::get('https://content.guardianapis.com/search', [
                'q' => $query,
                'api-key' => config('services.guardian.api_key'),
                'page-size' => $limit,
                'format' => 'json',
            ]);

            if ($response->successful()) {
                $this->storeArticles($response->json()['response']['results']);
            } else {
                throw new Exception('Error fetching articles from NYT');
            }
        } catch (Exception $e) {
            throw new Exception('Failed to fetch articles: ' . $e->getMessage());
        }
    }

    public function storeArticles(array $articles): void
    {
        foreach ($articles as $article) {
            Article::updateOrCreate(
                ['url' => $article['webUrl']],
                [
                    'title' => $article['webTitle'],
                    'content' => $article['fields']['bodyText'] ?? null,
                    'description' => $article['fields']['trailText'] ?? null,
                    'url' => $article['webUrl'],
                    'image_url' => null,
                    'source' => 'The Guardian',
                    'category' => $article['sectionName'],
                    'author' => $article['fields']['byline'] ?? 'Unknown',
                ]
            );
        }
    }
}
