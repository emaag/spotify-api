<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class SpotifyController extends Controller
{
    /**
     * @group Spotify
     *
     * Search for an artist on Spotify
     *
     * @response 200 {
     *   "artist": "White Stripes",
     *   "track": "Seven Nation Army"
     * }
     */
    public function index()
    {
        $response = Http::asForm()->withBasicAuth(
            config('services.spotify.client_id'),
            config('services.spotify.client_secret')
        )->post(config('services.spotify.token_url'), [
            'grant_type' => 'client_credentials',
        ]);

        $accessToken = $response['access_token'];

        $spotifyResponse = Http::withToken($accessToken)
            ->get('https://api.spotify.com/v1/search', [
                'q' => 'Daft Punk',
                'type' => 'artist',
            ]);

        return response()->json($spotifyResponse->json());
    }
}
