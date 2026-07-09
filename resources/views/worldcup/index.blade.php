<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>WK 2026 Wedstrijden</title>
    @vite(['resources/css/app.css'])
</head>

<body>

<div class="container">

    <div class=container-week> 
        <h2>Deze week spelen</h2>

     @php
         
        
     $highlightTeams = ['France', 'Marocco']
    @endphp

    </div>

    <h1> WK 2026 Wedstrijden</h1>

    @php
        // Splits de wedstrijden op status. De football-data.org API geeft
        // meestal: SCHEDULED, TIMED, IN_PLAY, PAUSED, FINISHED
        $finished  = collect($matches)->filter(fn($m) => $m['status'] === 'FINISHED');
        $live      = collect($matches)->filter(fn($m) => in_array($m['status'], ['IN_PLAY', 'PAUSED']));
        $upcoming  = collect($matches)->filter(fn($m) => in_array($m['status'], ['SCHEDULED', 'TIMED']));
    @endphp

    {{-- LIVE WEDSTRIJDEN --}}
    @if($live->count())
        <h2 class="section-title live"> Nu bezig</h2>
        <div class="matches">
            @foreach($live as $match)
                @include('partials.match-card', ['match' => $match, 'state' => 'live'])
            @endforeach
        </div>
    @endif

    {{-- AANKOMENDE WEDSTRIJDEN --}}
    <h2 class="section-title upcoming"> Nog te spelen</h2>
    <div class="matches">
        @forelse($upcoming as $match)
            @include('partials.match-card', ['match' => $match, 'state' => 'upcoming'])
        @empty
            <p class="empty">Geen aankomende wedstrijden.</p>
        @endforelse
    </div>

    {{-- GESPEELDE WEDSTRIJDEN --}}
    <h2 class="section-title finished"> Gespeeld</h2>
    <div class="matches">
        @forelse($finished as $match)
            @include('partials.match-card', ['match' => $match, 'state' => 'finished'])
        @empty
            <p class="empty">Nog geen wedstrijden gespeeld.</p>
        @endforelse
    </div>

</div>

</body>
</html>
