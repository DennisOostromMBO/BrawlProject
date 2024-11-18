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
     <form action="/register" method="POST">
     @csrf 

    <div>
        <label for="firstname">Voornaam:</label>
        <input type="text" id="firstname" name="firstname" required placeholder="Voornaam">
    </div>
    
    <div>
        <label for="middlename">Tussenvoegsel:</label>
        <input type="text" id="middlename" name="middlename" placeholder="Tussenvoegsel">
    </div>

    <div>
        <label for="lastname">Achternaam:</label>
        <input type="text" id="lastname" name="lastname" required placeholder="Achternaam">
    </div>
    
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required placeholder="E-mail">
    </div>
    
    <div>
        <label for="password">Wachtwoord:</label>
        <input type="password" id="password" name="password" required placeholder="Wachtwoord" minlength="6">
    </div>

    <div>
        <label for="confirm_password">Bevestig Wachtwoord:</label>
        <input type="password" id="confirm_password" name="confirm_password" required placeholder="Bevestig Wachtwoord" minlength="6">
    </div>

    <div>
        <button type="submit">Registreren</button>
    </div>
</form>

</body>
</html>