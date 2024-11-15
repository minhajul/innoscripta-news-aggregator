<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;

/**
 * @group Authentication
 *
 * APIs for managing authentication
 */
class PasswordResetController extends Controller
{
    /**
     * Send Password Reset Link
     *
     * @param Request $request
     * @bodyParam email string required Insert email Example: test@example.com
     *
     * @return JsonResponse
     */
    public function sendResetLink(Request $request): JsonResponse
    {
        $request->validate(['email' => 'required|email']);

        $user = User::query()
            ->where('email', $request->input('email'))
            ->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'data' => 'We can not find any account with this email',
            ], Response::HTTP_NOT_FOUND);
        }

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? response()->json(['message' => __($status)])
            : response()->json(['message' => __($status)], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Reset Password
     *
     * @param Request $request
     * @bodyParam email string required Insert email Example: test@example.com
     * @bodyParam password string required Insert password Example: password
     * @bodyParam password_confirmation string required Insert password confirmation Example: password
     *
     * @return JsonResponse
     */
    public function resetPassword(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data' => $validator->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $user = User::query()
            ->where('email', $request->input('email'))
            ->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'data' => 'We can not find any account with this email',
            ], Response::HTTP_NOT_FOUND);
        }

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => $password,
                ])->save();

                $user->tokens()->delete();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? response()->json(['message' => __($status)])
            : response()->json(['message' => __($status)], Response::HTTP_BAD_REQUEST);
    }
}
