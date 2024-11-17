<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brawlers</title>
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/brawler.css" rel="stylesheet">
</head>
<body>
    <x-navbar />

    <h1>List of Brawlers</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Rarity</th>
                <th>Role</th>
                <th>Picture</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brawlers as $brawler)
                <tr>
                    <td>{{ $brawler->name }}</td>
                    <td>{{ $brawler->rarity }}</td>
                    <td>{{ $brawler->role }}</td>
                    <td>
                        @if ($brawler->picture)
                            <img src="{{ asset($brawler->picture) }}" alt="{{ $brawler->name }}" style="width: 70px; height: 100%;">
                        @else
                            No image available
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('brawl.index') }}">Back to homepage</a>
</body>
</html>
