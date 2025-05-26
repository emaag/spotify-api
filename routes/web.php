<?php

use Illuminate\Support\Facades\Route;
use Dedoc\Scramble\Scramble;
use Dedoc\Scramble\Http\Controllers\DocsController;

Route::get('/', function () {
    return view('welcome');
});

// ✅ This is REQUIRED as of Scramble 1.8+
Scramble::routes(fn () => Route::get('/docs', [DocsController::class, '__invoke']));
