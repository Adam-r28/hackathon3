<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Owner;
use App\Models\Image;

class AnimalsController extends Controller
{
    public function list()
    {
        $animals = Animal::orderBy('name','asc')->get();
        // ->leftJoin('images', 'images.id', 'animals.images_id')
        // ->leftJoin('owners', 'owners.id', 'animals.owners_id')
       
        // dd($animals);
        return view('animals/list', compact('animals'));
    }

    public function detail($animal_id)
    {
        // $animal = Animal::                

    }
}
