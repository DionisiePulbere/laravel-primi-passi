<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sono la Homepage</h1>
    <h2>Ciao, {{ $name }} {{ $lastname }}, tanti auguri per i tuoi {{ $age }} anni</h2>

    @if ($age > 18)
        <div>Sei maggiorenne</div>
    @elseif ($age < 18)
        <div>Sei minorenne</div>
    @else
        <div>Inserisci la tua età</div>
    @endif
</body>
</html>