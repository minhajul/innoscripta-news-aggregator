<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Validator;

class LoginController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data' => $validator->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $user = User::query()
            ->where('email', Str::lower($request->input('email')))
            ->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'data' => 'We could not find any account with this email!',
            ], Response::HTTP_BAD_REQUEST);
        }

        if (!Hash::check($request->input('password'), $user->password)) {
            return response()->json([
                'success' => false,
                'data' => 'Credential does not match',
            ], Response::HTTP_UNAUTHORIZED);
        }

        return response()->json([
            'success' => true,
            'data' => new UserResource($user),
            'access_token' => $user->createToken('PersonalAccessToken')->plainTextToken,
        ]);
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'success' => true,
            'data' => null,
        ]);
    }
}
