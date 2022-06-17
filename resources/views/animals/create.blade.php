<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>{{ $animals->id ? 'Edit': 'Create' }} an Animal</title> --}}
</head>
<body>
    {{-- @include('common/messages') --}}

    {{-- <h1>{{ $animals->id ? 'Edit': 'Create' }} an Animal</h1> --}}

    @if ($animal->id)
        <form action="/animals{{ $animal->id }}" method="post">
            @method('put')
    @else
        <form action="{{ action('App\Http\Controllers\AnimalsController@store') }}" method="post">
    @endif
        @csrf

            <label>Name:</label>
            <input
                type="text"
                name="name"
                value="{{ old('name', $animal->name) }}"
            >

            <label>Spacies:</label>
            <input
                type="text"
                name="species"
                value="{{ old('species', $animal->species) }}"
            >

            <label>breed:</label>
            <input
                type="text"
                name="breed"
                value="{{ old('breed', $animal->breed) }}"
            >
            <label>Age:</label>
            <input
                type="text"
                name="age"
                value="{{ old('age', $animal->age) }}"
            >

        <button>Send</button>

    </form>
</body>
</html>
