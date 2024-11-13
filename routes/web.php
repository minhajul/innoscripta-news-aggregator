<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'success' => true,
        'message' => 'Innoscripta News Aggregator APIs',
        'version' => '1.0.0',
        'ip' => request()->ip(),
        'timestamp' => now()
    ]);
});


Route::get('/password/reset/{token}', function ($token) {
    return response()->json([
        'message' => 'This link would take you to a frontend reset form or can be handled as desired in your frontend application.',
        'token' => $token,
    ]);
})->name('password.reset');

