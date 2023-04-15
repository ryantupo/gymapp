<?php

namespace App\Http\Controllers;
use App\Models\Exercise;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        $Exercises = Exercise::all();
        return view('Exercises.index', ['Exercises' => $Exercises]);
    }

    public function create()
    {
        return view('Exercises.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'muscle_group' => 'required'
        ]);

        // Create a new Exercise and save it to the database
        $Exercise = new Exercise();
        $Exercise->name = $request->input('name');
        $Exercise->save();

        // Redirect to the index page with a success message
        return redirect('/today')->with('success', 'Exercise created successfully.');
    }

    public function show($id)
    {
        $Exercise = Exercise::findOrFail($id);
        return view('Exercises.show', ['Exercise' => $Exercise]);
    }

    public function edit($id)
    {
        $Exercise = Exercise::findOrFail($id);
        return view('Exercises.edit', ['Exercise' => $Exercise]);
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required'
        ]);

        // Update the Exercise's data in the database
        $Exercise = Exercise::findOrFail($id);
        $Exercise->name = $request->input('name');

        $Exercise->save();

        // Redirect to the index page with a success message
        return redirect('/today')->with('success', 'Exercise updated successfully.');
    }

    public function destroy($id)
    {
        $Exercise = Exercise::findOrFail($id);
        $Exercise->delete();

        // Redirect to the index page with a success message
        return redirect('/today')->with('success', 'Exercise deleted successfully.');
    }
}
