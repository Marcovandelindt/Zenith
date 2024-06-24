<?php

namespace App\Services;

use Aerni\Spotify\Spotify;

class SpotifyService
{
    protected $spotifyInstance;

    /**
     * Constructor
     *
     * @returns void
     */
    public function __construct()
    {
        $this->spotifyInstance = new Spotify([
            env('SPOTIFY_CLIENT_ID'),
            env('SPOTIFY_CLIENT_SECRET')
        ]);
    }

    /**
     * Get the spotify instance
     *
     * @returns Spotify
     */
    public function getSpotifyInstance(): Spotify
    {
        return $this->spotifyInstance;
    }

    /**
     * Get the spotify scopes
     *
     * @returns array
     */
    public function getScopes(): array
    {
        return [
            'ugc-image-upload',
            'user-read-playback-state',
            'user-modify-playback-state',
            'user-read-currently-playing',
            'app-remote-control',
            'streaming',
            'playlist-read-private',
            'playlist-read-collaborative',
            'playlist-modify-private',
            'playlist-modify-public',
            'user-follow-modify',
            'user-follow-read',
            'user-read-playback-position',
            'user-top-read',
            'user-read-recently-played',
            'user-library-modify',
            'user-library-read',
            'user-read-email',
            'user-read-private',
        ];
    }
}
