<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalsController extends Controller
{
    public function list()
    {
        $animals = Animal::orderBy('name','asc')->get();
        // dd($animals);
        return view('animals/list', compact('animals'));
    }
}
