<?php

namespace App\Http\Controllers;

use App\Models\autores;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores=autores::all();
        return view('autores.index', compact('autores'));
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
       $autores=new autores;
       $autores->autor=$request->input('nombre');
       $autores->save();
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(autores $autores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $autores=autores::find($id);
        $autores->autor=$request->input('nombre');
        $autores->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $autores=autores::find($id);
        $autores->delete();
        return redirect()->back();
    }
}
