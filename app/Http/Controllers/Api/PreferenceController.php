<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PreferenceRequest;
use App\Http\Resources\PreferenceResource;
use App\Models\Preference;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PreferenceController extends Controller
{
    public function index(Request $request)
    {
        $preferences = $request->user()->preferences;

        return response()->json([
            'success' => (bool)$preferences->count(),
            'data' => PreferenceResource::collection($preferences),
        ], $preferences->count() ? Response::HTTP_OK : Response::HTTP_NOT_FOUND);
    }

    public function store(PreferenceRequest $request)
    {
        $preference = $request->user()
            ->preferences()
            ->create($request->only('source', 'category', 'author'));

        $preference->load('user');

        return response()->json([
            'success' => true,
            'data' => new PreferenceResource($preference),
        ]);
    }

    public function show(Preference $preference)
    {
        return response()->json([
            'success' => true,
            'data' => new PreferenceResource($preference),
        ]);
    }

    public function update(PreferenceRequest $request, Preference $preference)
    {
        $preference = tap($preference)
            ->update($request->only('source', 'category', 'author'));

        return response()->json([
            'success' => true,
            'data' => new PreferenceResource($preference),
        ]);
    }

    public function destroy(Preference $preference)
    {
        $preference->delete();

        return response()->json([
            'success' => true,
            'data' => "Preference has been deleted."
        ]);
    }
}
