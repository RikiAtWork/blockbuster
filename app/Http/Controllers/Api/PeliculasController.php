<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Peliculas;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Peliculas::all();
        return response()->json($peliculas, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Peliculas $peliculas)
    {
        return response()->json($peliculas, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peliculas $peliculas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peliculas $peliculas)
    {
        //
    }
}
