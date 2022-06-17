<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit an animal</title>
</head>
<body>

    <h1>Edit an animal</h1>

    <form action="{{ action('App\Http\Controllers\AnimalsController@update', $animals->id) }}" method="post">
        @csrf

            <label>Age:</label>
            <input
                type="text"
                name="age"
                value="{{ old('age', $animals->age) }}"
            >

            <label>Weight:</label>
            <input
                type="text"
                name="weight"
                value="{{ old('weight', $animals->weight) }}"
            >

            {{-- <label>Address:</label>
            <input
                type="text"
                name="address"
                value="{{ old('address', $owners->address) }}"
            >

            <label>Phone:</label>
            <input
                type="text"
                name="phone"
                value="{{ old('phone', $owners->phone) }}"
            > --}}

        <button>Save</button>

    </form>


</body>
</html>