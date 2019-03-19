<?php

namespace App\Http\Controllers;

use App\Incidencia;
use Illuminate\Http\Request;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs = incidencia::all();

        return $qs;
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
        $model = new incidencia();

        $model->titulo = $request['titulo'];
        $model->descripcion = $request['descripcion'];
        $model->modulo_id = $request['modulo_id'];
        $model->tipo_incidencia_id = $request['tipo_incidencia_id'];
        $model->user_id = $request['user_id'];
        

        $model->save();
        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function show(Incidencia $incidencia, $id)
    {
        $registrosencontrados  = incidencia::find($id);
        return $registrosencontrados;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidencia $incidencia)
    {
        return view('editarincidencias', ['incidencia' => $incidencia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidencia $incidencia)
    {
        $incidencia->titulo = $request['titulo'];
        $incidencia->descripcion = $request['descripcion'];
        $incidencia->modulo_id = $request['modulo_id'];
        $incidencia->tipo_incidencia_id = $request['tipo_incidencia_id'];
        $incidencia->user_id = $request['user_id'];
        

        $incidencia->save();
        return $incidencia;
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(incidencia $incidencia)
    {
        $incidencia->delete();
        return redirect('/incidencia/list');
    }

    public function list()
    {
        $rs = $this->index();
        return view('listaincidencias', ['rs' => $rs]);
    }
}
