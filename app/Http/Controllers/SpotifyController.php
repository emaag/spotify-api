<?php

namespace App\Http\Controllers;

use Aerni\Spotify\Facades\Spotify;
use Illuminate\Http\Request;

class SpotifyController extends Controller
{
    public function artist($id)
    {
        $artist = Spotify::artist($id)->get();
        return response()->json($artist);
    }
}

