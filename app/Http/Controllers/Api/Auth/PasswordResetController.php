<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

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
     * @bodyParam email string required Insert email Example: test@example.com
     */
    public function sendResetLink(Request $request): JsonResponse
    {
        $request->validate(['email' => 'required|email']);

        $user = User::query()
            ->where('email', $request->input('email'))
            ->first();

        if (! $user) {
            return response()->json([
                'success' => false,
                'message' => 'We can not find any account with this email',
                'data' => null,
            ], Response::HTTP_NOT_FOUND);
        }

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? response()->json(['success' => true, 'message' => __($status), 'data' => null])
            : response()->json(['success' => false, 'message' => __($status), 'data' => null], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Reset Password
     *
     *
     * @bodyParam email string required Insert email Example: test@example.com
     * @bodyParam password string required Insert password Example: password
     * @bodyParam password_confirmation string required Insert password confirmation Example: password
     */
    public function resetPassword(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'data' => $validator->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $user = User::query()
            ->where('email', $request->input('email'))
            ->first();

        if (! $user) {
            return response()->json([
                'success' => false,
                'message' => 'We can not find any account with this email',
                'data' => null,
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
            ? response()->json(['success' => true, 'message' => __($status), 'data' => null])
            : response()->json(['success' => false, 'message' => __($status), 'data' => null], Response::HTTP_BAD_REQUEST);
    }
}
