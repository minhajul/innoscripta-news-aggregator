<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\UserResource;
use App\Models\Article;
use App\Models\Preference;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function __invoke(Request $request)
    {
        return response()->json([
            'success' => true,
            'message' => 'Request successful',
            'data' => new UserResource($request->user()),
        ]);
    }

    public function getArticlesByPreferences(Request $request)
    {
        $user = $request->user();

        $preferences = Preference::query()
            ->ofUser($user)
            ->get();

        if ($preferences->isEmpty()) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'No preferences found'
            ], Response::HTTP_NOT_FOUND);
        }

        $query = Article::query();

        $preferences->each(function ($preference) use ($query) {
            $query->orWhere(function ($query) use ($preference) {
                $query->where('source', $preference->source)
                    ->where('category', $preference->category)
                    ->where('author', $preference->author);
            });
        });

        $articles = $query->get();

        if ($articles->isEmpty()) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'No articles found'
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            'success' => true,
            'message' => 'Request successful',
            'data' => ArticleResource::collection($articles)
        ]);
    }
}