<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\PremierLeagueApiService;
use Illuminate\Http\Request;

class PremierLeagueTopAssistController extends Controller
{
    protected $premierLeagueApiService;

    public function __construct(PremierLeagueApiService $premierLeagueApiService)
    {
        $this->premierLeagueApiService = $premierLeagueApiService;
    }

    public function index()
    {
        $topAssisters = $this->premierLeagueApiService->getTopAssist();
        
        // Check if there's an error
        if (isset($topAssisters['error'])) {
            return view('top-assist.error', ['error' => $topAssisters['error']]);
        }
        
        return view('top-assist.index', ['topAssisters' => $topAssisters]);
    }
}
