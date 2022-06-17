<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animal info</title>
</head>
<body>
    
   <h1> Animal details: </h1>
   <img src="images/pets/{{$animal->image->path}}" alt="Pet's image">
    <h3>Name: </h3>
   <p> {{$animal->name}} </p>
   <h3>Species: </h3>
   <p> {{$animal->species}} </p>
   <h3>Breed: </h3>
   <p> {{$animal->breed}} </p>
   <h3>Age: </h3>
   <p> {{$animal->age}} years old. </p>
   <h3>Weight: </h3>
   <p> {{$animal->weight}} kgs. </p>
    <h1> Animal's owner details: </h1>
    <h3>Name: </h3>
    <p> {{$animal->owner->first_name}} {{$animal->owner->surname}} </p>
    <h3>Email: </h3>
    <p> {{$animal->owner->email ? $animal->owner->email : "Email was not registred" }} </p>
    <h3>Phone: </h3>
    <p> {{$animal->owner->phone ? $animal->owner->phone : "Phone was not registred" }} </p>
    <h3>Adress: </h3>
    <p> {{$animal->owner->adress ? $animal->owner->adress : "Adress was not registred" }} </p>

</body>
</html>