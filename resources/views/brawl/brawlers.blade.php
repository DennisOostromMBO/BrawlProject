<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brawlers</title>
    <link href="/css/brawler.css" rel="stylesheet">
</head>
<body>
    <h1>List of Brawlers</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Rarity</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brawlers as $brawler)
                <tr>
                    <td>{{ $brawler->name }}</td>
                    <td>{{ $brawler->rarity }}</td>
                    <td>{{ $brawler->role }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('brawl.index') }}">Back to homepage</a>
</body>
</html>
