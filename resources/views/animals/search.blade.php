<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie search</title>
</head>
<body>

    <h1>Search for an animal</h1>

    <form action="{{ route('search') }}" method="get">

        <input
            type="text"
            name="search"
            value="{{ $search_term }}"
        >

        <button>Search</button>


    </form>

    <ul>
        @foreach ($results as $animal)
            <li>
                <a href="{{ route('animal.detail', $animal->id) }}">
                    {{ $animal->name }}
                    ({{ $animal->id }})
                </a>
            </li>
        @endforeach
    </ul>

</body>
</html>