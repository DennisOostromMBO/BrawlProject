<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $brawler->name }} Stats</title>
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
    <x-navbar />
    <a href="{{ route('brawl.brawlers') }}">Back to Brawlers</a>

    <h1>{{ $brawler->name }} Stats</h1>

    <p><strong>Rarity:</strong> {{ $brawler->rarity }}</p>
    <p><strong>Role:</strong> {{ $brawler->role }}</p>
    @if ($brawler->stats)
        <p><strong>HP:</strong> {{ $brawler->stats->HP }}</p>
        <p><strong>Damage:</strong> {{ $brawler->stats->Damage }}</p>
        <p><strong>Starpower:</strong> {{ $brawler->stats->Starpower }}</p>
    @else
        <p>No stats available for this brawler.</p>
    @endif

    <td>
        @if ($brawler->picture)
            <img src="{{ asset($brawler->picture) }}" alt="{{ $brawler->name }}" style="width: 100px; height: 100px;">
        @else
            No image available
        @endif
    </td>
</body>
</html>
