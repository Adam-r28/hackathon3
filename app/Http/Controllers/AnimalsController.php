<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Owner;
use App\Models\Image;
use App\Http\Requests\AnimalRequest;

class AnimalsController extends Controller
{
    public function list()
    {
        $animals = Animal::orderBy('name', 'asc')->get();
        // dd($animals);
        return view('animals/list', compact('animals'));
    }

    public function detail($id)
    {

        $animal = Animal::findOrFail($id);
        // dd(detail(1));  
        return view('animals.detail', compact('animal'));
    }
    public function search(Request $request)
    {
        if ($request->has('search')) {

            $search_term = $request->input('search');

            $results = Animal::where('name', 'like', '%' . $search_term . '%')
                ->orderBy('name', 'asc')
                ->get();
        } else {

            // no searching
            $search_term = '';
            $results = collect();
        }

        return view('animals.search', [
            'search_term' => $search_term,
            'results' => $results
        ]);
    }

    public function edit($id)
    {
        $animals = Animal::findOrFail($id);

        return view('animals.edit', compact('animals'));
    }

    public function update($id, AnimalRequest $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
            ]
        );

        $animals = Animal::where($id);

        $animals->age = $request->input('age');
        $animals->weight = $request->input('weight');

        $animals->save();

        session()->flash('success_message', 'New animals registered');

        return redirect(url('/animals/detail/' . $animals->id));
    }

    public function create()
    {

        $animal = new Animal;




        return view('animals/create', compact('animal'));
    }

    public function store(AnimalRequest $request)
    {
        $animal = new Animal;

        $animal->name = $request->input('name');
        $animal->species = $request->input('species');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');


        $animal->save();

        session()->flash('success_message', 'New animal registered.');

        return redirect(url('/animals/detail/' . $animal->id));
    }
}
