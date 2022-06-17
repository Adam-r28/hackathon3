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
            <li>Pet's name: <a href="/animals/detail/{{$animal->id}}"">{{$animal->name}}</a>, @if($animal->owner)Owner's name: {{$animal->owner->first_name}} {{$animal->owner->surname}}@endif, @if($animal->image)<img src="images/pets/{{$animal->image->path}}"alt="Pet's image">@endif
            </li>
        @endforeach
    </ul>

    {{-- <tr>
        <th>Pet's name: </th>
        <th>Photo</th>
        <th>Owner's name: </th>
    </tr>
    @foreach($animals as $animal)
    <tr>
        <td>{{$animal->name}}</td>
        <td>{{$animal->name}}</td>
        <td>{{$animal->owner->first_name}}{{$animal->owner->surname}}</td>
    </tr>
     @endforeach --}}

</body>
</html>