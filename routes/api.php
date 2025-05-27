<?php
use App\Http\Controllers\SpotifyController;

Route::get('/artist/{id}', [SpotifyController::class, 'artist']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

