<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @group Authentication
 *
 * APIs for managing authentication
 */
class LoginController extends Controller
{
    /**
     * Login
     *
     * @param LoginRequest $request
     * @return JsonResponse
     * @bodyParam email string required Insert email Example: test@example.com
     * @bodyParam password string required Insert password Example: password
     *
     */
    public function index(LoginRequest $request): JsonResponse
    {
        $user = User::query()
            ->where('email', Str::lower($request->input('email')))
            ->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'We could not find any account with this email!',
                'data' => null,
            ], Response::HTTP_BAD_REQUEST);
        }

        if (!Hash::check($request->input('password'), $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Credential does not match',
                'data' => null,
            ], Response::HTTP_UNAUTHORIZED);
        }

        return response()->json([
            'success' => true,
            'message' => 'Request successful',
            'data' => new UserResource($user),
            'access_token' => $user->createToken('PersonalAccessToken')->plainTextToken,
        ]);
    }

    /**
     * Logout
     *
     * @param Request $request
     * @authenticated
     *
     * @return JsonResponse
     */
    public function logout(Request $request): JsonResponse
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'success' => true,
            'data' => null,
        ]);
    }
}
