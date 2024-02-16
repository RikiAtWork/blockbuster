<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peliculas;
class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Peliculas::all();
        return view("movies.index", compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("movies.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelicula = new Peliculas();
        $pelicula->title = $request->get('title');
        $pelicula->year = $request->get('year');
        $pelicula->director = $request->get('director');
        $pelicula->rented = $request->get('rented');
        $pelicula->synopsis = $request->get('synopsis');
        $pelicula->poster = $request->get('imagen');
        $pelicula->save();

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelicula = Peliculas::findOrFail($id);
        return view('movies.edit', compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelicula = Peliculas::findOrFail($id);
        $pelicula->title = $request->get('title');
        $pelicula->year = $request->get('year');
        $pelicula->director = $request->get('director');
        $pelicula->rented = $request->get('rented');
        $pelicula->synopsis = $request->get('synopsis');
        $pelicula->poster = $request->get('imagen');
        $pelicula->save();

        return redirect()->route('movies.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelicula = Peliculas::findOrFail($id);
        $pelicula->delete();

        return redirect()->route('movies.index');
        
    }
}
