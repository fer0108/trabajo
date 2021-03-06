<?php

namespace App\Http\Controllers;

use App\TipoIncidencia;
use Illuminate\Http\Request;

class TipoIncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs = TipoIncidencia::all();

        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = new tipo();
        $tipo->tipo = $request['tipo'];
        $tipo->save();
        return $tipo;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoIncidencia  $tipoIncidencia
     * @return \Illuminate\Http\Response
     */
    public function show(TipoIncidencia $tipo, $id)
    {
        $registroencontrado  = tipo::find($id);
        return $registroencontrado;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoIncidencia  $tipoIncidencia
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoIncidencia $tipo)
    {
        return view('editartipo', ['tipo' => $tipo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoIncidencia  $tipoIncidencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoIncidencia $tipo)
    {
        $tipo->tipo = $request['tipo'];
        $tipo->save();
        return $tipo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoIncidencia  $tipoIncidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoIncidencia $tipo)
    {
        $tipo->delete();
        return redirect('tipoincidencia/list');
    }

    public function list()
    {
        $rs = $this->index();
        return view('listatipo', ['rs' => $rs]);


    }
}
