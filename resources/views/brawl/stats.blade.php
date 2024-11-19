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
    <h1>{{ $brawler->name }} Stats</h1>

    <p><strong>Rarity:</strong> {{ $brawler->rarity }}</p>
    <p><strong>Role:</strong> {{ $brawler->role }}</p>
    <p><strong>Description:</strong> {{ $brawler->description }}</p>

    <!-- Add more stats or details here as needed -->

    <a href="{{ route('brawl.brawlers') }}">Back to Brawlers</a>
</body>
</html>
