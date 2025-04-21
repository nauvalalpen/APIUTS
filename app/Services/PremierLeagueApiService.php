<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class PremierLeagueApiService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('RAPIDAPI_KEY'); // Ambil API key dari file .env
    }

    /**
     * Mengambil semua tim dari API Premier League
     *
     * @return array
     */
    public function getTopAssist(): array
    {
        try {
            $response = $this->client->request('GET', 'https://premier-league18.p.rapidapi.com/players/topAssisters', [
                'headers' => [
                    'x-rapidapi-key' => $this->apiKey,
                    'x-rapidapi-host' => 'premier-league18.p.rapidapi.com', // biasanya ini juga dibutuhkan
                ],
                'verify' => false, // Menonaktifkan verifikasi SSL (hati-hati jika production)
            ]);

            $data = json_decode($response->getBody()->getContents(), true);

            return $data;
        } catch (RequestException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
