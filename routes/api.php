<?php

use App\Http\Controllers\SpotifyController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/artist/{id}', [SpotifyController::class, 'artist']);
