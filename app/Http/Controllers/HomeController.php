<?php

namespace App\Http\Controllers;

use App\Services\SpotifyService;

class HomeController extends Controller
{
    public function index(SpotifyService $spotify)
    {
        $showId = env('SPOTIFY_SHOW_ID');

        $data = $spotify->getShow($showId);

        $podcast = $data['name'] ?? 'Podcast';
        $lastEpisode = $data['episodes']['items'][0] ?? null;
        $episode_preview_url = $lastEpisode['episode_preview_url']['spotify'] ?? null;
        $episode_spotify_url = $lastEpisode['external_urls']['spotify'] ?? null;

        return view('home', compact('podcast', 'lastEpisode', 'episode_preview_url', 'episode_spotify_url'));
    }
}
