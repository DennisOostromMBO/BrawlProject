</body>
</html><!DOCTYPE html>
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
    <p><strong>Description:</strong> {{ $brawler->description }}</p>
    <p><strong>HP:</strong> {{ $stats->HP }}</p>
    <td>
                        @if ($brawler->picture)
                                <img src="{{ asset($brawler->picture) }}" alt="{{ $brawler->name }}" style="width: 100px; height: 100px;"> <br>
                            </a>
                        @else
                            No image available
                        @endif
                    </td>
</body>
</html>
