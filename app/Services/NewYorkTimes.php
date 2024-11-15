<?php

namespace App\Services;

use App\Models\Article;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Http;

class NewYorkTimes implements NewsAggregatorServiceInterface
{
    /**
     * @throws Exception
     */
    public function fetchArticles(string $query, int $limit): void
    {
        try {
            $response = Http::get('https://api.nytimes.com/svc/search/v2/articlesearch.json', [
                'q' => $query,
                'api-key' => config('services.nytimes.api_key'),
                'limit' => $limit,
            ]);

            if ($response->successful()) {
                $this->storeArticles($response->json()['response']['docs']);
            } else {
                throw new Exception('Error fetching articles from NYT');
            }
        } catch (Exception $e) {
            throw new Exception('Failed to fetch articles: '.$e->getMessage());
        }
    }

    public function storeArticles(array $articles): void
    {
        foreach ($articles as $article) {
            Article::updateOrCreate(
                ['url' => $article['web_url']],
                [
                    'title' => $article['headline']['main'],
                    'description' => $article['abstract'] ?? null,
                    'content' => $article['lead_paragraph'],
                    'published_at' => Carbon::parse($article['pub_date'])->toDateString(),
                    'source' => $article['source'],
                    'author' => $article['byline']['original'],
                    'category' => $article['section_name'],
                    'image_url' => null,
                ]
            );
        }
    }
}
