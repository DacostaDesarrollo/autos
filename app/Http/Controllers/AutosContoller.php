<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AutosContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = Auto::all();
        return view('autos.index', compact("autos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autos = new Auto();
       return view('autos.crear', compact('autos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autos = new Auto();
        $autos->placa = $request->placa; //$codigo = $POST
        $autos->marca = $request->marca;
        $autos->modelo = $request->modelo;
        $autos->year= $request->year;

        $autos->save();
        session()->flash("flash.banner", "autos creado de manera exitosa");
        return Redirect::route('autos.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auto  $autos
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $autos)
    {
        var_dump($autos);
        //return view('autos.ver', compact("autos"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auto  $autos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autos = Auto::find($id);
        return view('autos.edit', compact("autos"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auto  $autos
     * @return \Illuminate\Http\Response
     */
    public function update( $auto)
    {
        var_dump($auto);
        /* $autos->placa = $request->placa;
        $autos->marca = $request->marca;
        $autos->modelo = $request->modelo;
        $autos->year = $request->year;
        $autos->save();
        session()->flash("flash.banner", "autos actualizado de manera exitosa.");
        return Redirect::route('autos.index'); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auto  $autos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auto $autos)
    {
        $autos->delete();
        session()->flash("flash.banner", "autos eliminado de manera exitosa.");
        return Redirect::route('autos.index'); 
    }
}

