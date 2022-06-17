<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalsController extends Controller
{
    public function list()
    {
        $animals = Animal::orderBy('name', 'asc')->get();
        // dd($animals);
        return view('animals/list', compact('animals'));
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
}
