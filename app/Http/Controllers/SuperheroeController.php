<?php

namespace App\Http\Controllers;

use App\Models\Superheroe;
use Illuminate\Http\Request;

class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Superheroe::all();
        return view('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superheroes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'real_name' => 'required',
            'superhero_name' => 'required',
            'photo_url' => 'required|url',
            'additional_info' => 'nullable',
        ]);

        Superheroe::create($validatedData);

        return redirect()->route('superheroes.index')->with('success', 'Superhéroe registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $superhero = Superheroe::findOrFail($id);
        return view('superheroes.show', compact('superhero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $superhero = Superheroe::findOrFail($id);
        return view('superheroes.edit', compact('superhero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'real_name' => 'required',
            'superhero_name' => 'required',
            'photo_url' => 'required|url',
            'additional_info' => 'nullable',
        ]);

        Superheroe::whereId($id)->update($validatedData);

        return redirect()->route('superheroes.index')->with('success', 'Superhéroe actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $superhero = Superheroe::findOrFail($id);
        $superhero->delete();

        return redirect()->route('superheroes.index')->with('success', 'Superhéroe eliminado correctamente.');
    }
}
