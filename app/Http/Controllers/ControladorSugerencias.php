<?php

namespace App\Http\Controllers;

use App\Models\Sugerencias;
use Illuminate\Http\Request;

class ControladorSugerencias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sugerencias', ['sugerencias' => Sugerencias::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sugerencias::create($request->all());
        return redirect('/tienda/public/sugerencias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sugerencias  $sugerencias
     * @return \Illuminate\Http\Response
     */
    public function show(Sugerencias $sugerencias)
    { 
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sugerencias  $sugerencias
     * @return \Illuminate\Http\Response
     */
    public function edit(Sugerencias $sugerencias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sugerencias  $sugerencias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sugerencias $sugerencias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sugerencias  $sugerencias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sugerencias $sugerencias)
    {
        //
    }
}
