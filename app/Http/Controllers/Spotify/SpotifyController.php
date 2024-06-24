<?php

namespace App\Http\Controllers\Spotify;

use Aerni\Spotify\Spotify;
use App\Http\Controllers\Controller;
use App\Services\SpotifyService;
use Illuminate\Http\Request;

class SpotifyController extends Controller
{
    protected $spotifyService;

    /**
     * Constructor
     *
     * @returns void
     */
    public function __construct(SpotifyService $spotifyService)
    {
        $this->spotifyService = $spotifyService;
    }


    /**
     * Index action
     *
     * @param Request $request
     *
     * @returns void
     */
    public function index(Request $request): void
    {
        $spotifyInstance = $this->spotifyService->getSpotifyInstance();
        $spotifyScopes = $this->spotifyService->getScopes();
    }
}
