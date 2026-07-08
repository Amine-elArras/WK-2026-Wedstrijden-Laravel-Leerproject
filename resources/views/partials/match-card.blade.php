<div class="match-card match-card--{{ $state }}">

    <div class="match-status">
        @if($state === 'live')
            <span class="badge badge-live">LIVE</span>
        @elseif($state === 'finished')
            <span class="badge badge-finished">AFGELOPEN</span>
        @else
            <span class="badge badge-upcoming">GEPLAND</span>
        @endif
    </div>

    <div class="teams">
        <span class="team">{{ $match['homeTeam']['name'] }}</span>

        @if($state === 'finished' || $state === 'live')
            <strong class="score">
                {{ $match['score']['fullTime']['home'] ?? '-' }}
                -
                {{ $match['score']['fullTime']['away'] ?? '-' }}
            </strong>
        @else
            <strong>VS</strong>
        @endif

        <span class="team">{{ $match['awayTeam']['name'] }}</span>
    </div>

    <p class="match-date">
        {{ \Carbon\Carbon::parse($match['utcDate'])->timezone('Europe/Amsterdam')->translatedFormat('d M Y H:i') }}
    </p>

    <small class="match-group">
        {{ $match['group'] ?? 'Knock-out' }}
    </small>

</div>