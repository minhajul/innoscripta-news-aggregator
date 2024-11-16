<?php

namespace App\Http\Controllers\Api;

use App\Filters\Articles\ByCategory;
use App\Filters\Articles\ByDate;
use App\Filters\Articles\ByKeywords;
use App\Filters\Articles\BySource;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Pipeline;

/**
 * @group Article
 *
 * APIs for getting articles
 */
class ArticlesController extends Controller
{
    /**
     * Get Articles
     *
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $pipelines = [
            new ByKeywords($request),
            new ByDate($request),
            new ByCategory($request),
            new BySource($request),
        ];

        $articles = Pipeline::send(Article::query())
            ->through($pipelines)
            ->thenReturn()
            ->paginate(30);

        return response()->json([
            'success' => (bool) $articles->count(),
            'message' => 'Request successful',
            'data' => ArticleResource::collection($articles),
            'meta' => [
                'total' => $articles->total(),
                'next_page_url' => $articles->nextPageUrl(),
                'per_page' => $articles->perPage(),
                'current_page' => $articles->currentPage(),
                'last_page' => $articles->lastPage(),
            ],
        ], $articles->count() ? Response::HTTP_OK : Response::HTTP_NOT_FOUND);
    }

    /**
     * Get Single Article
     *
     * @urlParam article_slug string required The slug of the article. Example: demo-title
     *
     * @return JsonResponse
     */
    public function show(Article $article)
    {
        return response()->json([
            'success' => (bool) $article,
            'message' => 'Request successful',
            'data' => new ArticleResource($article),
        ]);
    }
}
