<?php

namespace App\Http\Controllers;

use App\Models\Lectores;
use Illuminate\Http\Request;

class LectoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lectores=Lectores::all();
        return view('Lectores.index', compact('lectores'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
                //
                $lectores= new Lectores;
                $lectores->nombre=$request->input('nombre');
                $lectores->apellido=$request->input('apellido');
                $lectores->telefono=$request->input('telefono');
                $lectores->direccion=$request->input('direccion');
                $lectores->save();
                return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Lectores $lectores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lectores $lectores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lectores $lectores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $lectores=Lectores::find($id);
        $lectores->delete();
        return redirect()->back();
    }
}
