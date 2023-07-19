<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Grazie per averci contattato, {{$name}}!</h1>
    <h2>Risponderemo il prima possibile.</h2>
    <p>Ecco il riepilogo dei tuoi dati:</p>
    <ul>
        <li>Nome e cognome: {{$name}}</li>
        <li>Email: {{$email}}</li>
        <li>Messaggio: {{$user_message}}</li>
    </ul>
    <small>Se non hai fatto richiesta, ignora pure questa mail.</small>
</body>
</html>