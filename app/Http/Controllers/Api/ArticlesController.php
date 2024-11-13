<?php

namespace App\Http\Controllers\Api;

use App\Filters\Articles\ByCategory;
use App\Filters\Articles\ByDate;
use App\Filters\Articles\ByKeywords;
use App\Filters\Articles\BySource;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Pipeline;

class ArticlesController extends Controller
{
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
            'success' => (bool)$articles->count(),
            'data' => ArticleResource::collection($articles),
            'meta' => [
                'total' => $articles->total(),
                'next_page_url' => $articles->nextPageUrl(),
                'per_page' => $articles->perPage(),
                'current_page' => $articles->currentPage(),
                'last_page' => $articles->lastPage(),
            ]
        ], $articles->count() ? Response::HTTP_OK : Response::HTTP_NOT_FOUND);
    }

    public function show(Article $article)
    {
        return response()->json([
            'success' => true,
            'data' => new ArticleResource($article),
        ]);
    }
}
