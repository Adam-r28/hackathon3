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

    public function detail($animal_id)
    {
        // $animal = Animal::                
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
        $animals = Animal::where('id', $id)->first();

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

        $animals = Animal::get($id);

        $animals->age = $request->input('age');
        $animals->weight = $request->input('weight');

        $animals->save();

        session()->flash('success_message', 'New animals registered');

        return redirect(url('/animals/detail/' . $animals->id));
    }
}
