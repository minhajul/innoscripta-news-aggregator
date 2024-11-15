<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;

/**
 * @group Authentication
 *
 * APIs for managing authentication
 */
class RegistrationController extends Controller
{

    /**
     * Registration
     *
     * @param RegistrationRequest $request
     *
     * @bodyParam name string required Insert name Example: John Doe
     * @bodyParam email string required Insert email Example: test@example.com
     * @bodyParam password string required Insert password Example: password
     * @bodyParam password_confirmation string required Insert password confirmation Example: password
     *
     * @return JsonResponse
     */
    public function index(RegistrationRequest $request): JsonResponse
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return response()->json([
            'success' => true,
            'data' => new UserResource($user),
            'access_token' => $user->createToken('PersonalAccessToken')->plainTextToken,
        ]);
    }
}
