<?php

use Illuminate\Support\Facades\Route;
use Dedoc\Scramble\Scramble;
use Dedoc\Scramble\Http\Controllers\DocsController;
use Illuminate\Support\Facades\Route;

Route::redirect('/docs', '/docs/api');

Route::get('/docs', [DocsController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});


Scramble::routes(fn () => Route::get('/docs', [DocsController::class, '__invoke']));
