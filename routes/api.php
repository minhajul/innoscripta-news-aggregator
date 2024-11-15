<?php

use App\Http\Controllers\Api\ArticlesController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\PasswordResetController;
use App\Http\Controllers\Api\Auth\RegistrationController;
use App\Http\Controllers\Api\PreferenceController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::post('/register', [RegistrationController::class, 'index']);
Route::post('/login', [LoginController::class, 'index']);
Route::post('/password/email', [PasswordResetController::class, 'sendResetLink']);
Route::post('/password/reset', [PasswordResetController::class, 'resetPassword']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('/logout', [LoginController::class, 'logout']);

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/preferences', [PreferenceController::class, 'index']);
    Route::post('/preferences/create', [PreferenceController::class, 'store']);
    Route::get('/preferences/{preference}', [PreferenceController::class, 'show']);
    Route::put('/preferences/{preference}/update', [PreferenceController::class, 'update']);
    Route::delete('/preferences/{preference}', [PreferenceController::class, 'destroy']);
});

Route::get('/articles', [ArticlesController::class, 'index']);
Route::get('/articles/{article:slug}', [ArticlesController::class, 'show'])
    ->missing(function () {
        return response()->json([
            'success' => false,
            'message' => 'Article not found',
        ], Response::HTTP_NOT_FOUND);
    });


