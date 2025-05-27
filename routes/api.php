<?php

use App\Http\Controllers\SpotifyController;

Route::get('/artist/{id}', [SpotifyController::class, 'artist']);
