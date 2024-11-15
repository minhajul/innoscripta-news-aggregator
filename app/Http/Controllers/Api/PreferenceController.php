<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PreferenceRequest;
use App\Http\Resources\PreferenceResource;
use App\Models\Preference;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * @group Preference
 *
 * APIs for managing preferences
 */
class PreferenceController extends Controller
{
    /**
     * Get Preferences
     *
     *
     * @authenticated
     *
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $preferences = $request->user()->preferences;

        return response()->json([
            'success' => (bool) $preferences->count(),
            'message' => $preferences->count() ? 'Request successful' : 'No preference found',
            'data' => PreferenceResource::collection($preferences),
        ], $preferences->count() ? Response::HTTP_OK : Response::HTTP_NOT_FOUND);
    }

    /**
     * Create Preference
     *
     * @bodyParam source string required Insert source Example: BBC
     * @bodyParam category string required Insert category Example: tech
     * @bodyParam author string required Insert author Example: Mr. X
     *
     * @authenticated
     *
     * @return JsonResponse
     */
    public function store(PreferenceRequest $request)
    {
        $preference = $request->user()
            ->preferences()
            ->create($request->only('source', 'category', 'author'));

        $preference->load('user');

        return response()->json([
            'success' => true,
            'message' => 'Request successful',
            'data' => new PreferenceResource($preference),
        ]);
    }

    /**
     * Get Single Preference
     *
     *
     * @authenticated
     *
     * @return JsonResponse
     */
    public function show(Preference $preference)
    {
        return response()->json([
            'success' => true,
            'message' => 'Request successful',
            'data' => new PreferenceResource($preference),
        ]);
    }

    /**
     * Update Preference
     *
     *
     * @bodyParam source string required Insert source Example: BBC
     * @bodyParam category string required Insert category Example: tech
     * @bodyParam author string required Insert author Example: Mr. X
     *
     * @authenticated
     *
     * @return JsonResponse
     */
    public function update(PreferenceRequest $request, Preference $preference)
    {
        $preference = tap($preference)
            ->update($request->only('source', 'category', 'author'));

        return response()->json([
            'success' => true,
            'message' => 'Request successful',
            'data' => new PreferenceResource($preference),
        ]);
    }

    /**
     * Destroy Preference
     *
     *
     * @authenticated
     *
     * @return JsonResponse
     */
    public function destroy(Preference $preference)
    {
        $preference->delete();

        return response()->json([
            'success' => true,
            'message' => 'Request successful',
            'data' => 'Preference has been deleted.',
        ]);
    }
}
