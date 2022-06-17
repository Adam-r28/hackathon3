<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $movie->name ?> (<?= $movie->year ?>)</title>
</head>
<body>
    <h2>Animals</h2>

    <ul>
        <?php foreach ($animal->name as $name) : ?>
            <li>
                <?= $genre->name ?>
            </li>
        <?php endforeach; ?>
    </ul>

    
        <ul>
            <?php foreach ($animals as $animal) : ?>
                <li>
                    <a href="/animals/detail?id=<?= $animal->id ?>">
                        <?= $animal->name ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

  

{{-- 
    <form action="{{ action('AnimalsController@destroy', [$animal->id])}}" method="post">
        @method('put')
        @csrf
    <button>Delete</button>
    </form> --}}
    
</body>
</html>