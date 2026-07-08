<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class VoetbalDataService
{
    // public function getWorldCupMatches()
    // {
    //     $response = Http::withoutVerifying()
    //         ->withHeaders([
    //             'X-Auth-Token' => env('VOETBAL_DATA_API_KEY'),
    //         ])
    //         ->get('https://api.football-data.org/v4/competitions/WC/matches', [
    //             'season' => 2026,
    //         ]);

    //     return $response->json();
    // }
  

    public function getWorldCupMatches($season = 2026)
    {
         
        $response = Http::withoutVerifying()
            ->withHeaders([
                'X-Auth-Token' => env('VOETBAL_DATA_API_KEY'),
            ])
            ->get('https://api.football-data.org/v4/competitions/WC/matches', [
                'season' => $season,
            ]);

        return $response->json('matches');
    }


}