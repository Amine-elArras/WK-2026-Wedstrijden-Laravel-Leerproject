<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\VoetbalDataService;

class WorldCupController extends Controller
{
    public function index(VoetbalDataService $voetbal)
    {
        // return response()->json(
        //     $voetbal->getWorldCupMatches(2026)
        // );

        $matches = $voetbal->getWorldCupMatches(2026);
        return view('worldcup.index', ['matches' => $matches]);
    }
}   