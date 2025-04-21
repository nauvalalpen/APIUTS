<?php

use App\Http\Controllers\Api\PremierLeagueTopAssistController;
use App\Http\Controllers\TopAssistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/', function () {
    return view('welcome');
});

// // Route untuk mendapatkan semua tim 
// Route::get('api/teams', [PremierLeagueController::class, 
// 'getAllTeams']); 

// Route untuk mendapatkan Top Assist dari Premier League
Route::get('api/top-assist', [PremierLeagueTopAssistController::class,'getTopAssist']);
Route::get('api/top-assist', [PremierLeagueTopAssistController::class, 'index']);

Route::get('/weather', [WeatherController::class, 'index'])->name('weather.index');
Route::get('/weather/update', [WeatherController::class, 'updateWeatherInfo'])->name('weather.update');
