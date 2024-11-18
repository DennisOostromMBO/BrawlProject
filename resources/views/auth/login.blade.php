<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/register.css" rel="stylesheet">
</head>
<body>
     <x-navbar />
     <form action="/login" method="POST">
        @csrf 
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required placeholder="E-mail">
    </div>
    
    <div>
        <label for="password">Wachtwoord:</label>
        <input type="password" id="password" name="password" required placeholder="Wachtwoord" minlength="6">
    </div>

    <div>
        <button type="submit">Registreren</button>
    </div>
</form>

</body>
</html>