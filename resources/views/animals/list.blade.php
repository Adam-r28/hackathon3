<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Animals</title>
</head>
<body>
    <h1>Full list of all animals:</h1>
    
    <ul>
        @foreach($animals as $animal)
            <li> {{$animal->name}}</li>
        @endforeach
    </ul>

</body>
</html>