<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpotifyController extends Controller
{
    public function index()
    {
        return response()->json([
            'artist' => 'White Stripes',
            'album' => 'Elephant',
            'track' => 'Seven Nation Army'
        ]);
    }
}
