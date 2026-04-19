<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Director;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $directores = Director::all();
        $header = ['Nombre', 'Apellido', 'Fecha nacimiento'];
        $data = $directores->makeHidden(['id'])->toArray();
    
        return view('director.index',compact('data','header'));
        //return view(''); //TODO: Crear vista con componente tipo tabla que muestre todos los directores, y un enlace a la página de cada uno de ellos.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
    public function show(Director $director)
    {
        //
        $headerPeliculas = ['Title', 'Sinopsis', 'Duration'];
        $films = $director->films->makeHidden(['release_date', 'gendre','created_at','updated_at','director_id'])->toArray();
        return view('director.show',compact('director','headerPeliculas','films'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
