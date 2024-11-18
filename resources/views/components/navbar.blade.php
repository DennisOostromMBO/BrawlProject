<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="{{ route('brawl.index') }}">Home</a></li>
        <li><a href="{{ route('brawl.brawlers') }}">See all Brawlers</a></li>
        <li><a href="{{ route('login') }}">Log in</a></li>
        <li><a href="{{ route('register') }}">register</a></li>   
    </ul>
</nav>

</body>
</html>
