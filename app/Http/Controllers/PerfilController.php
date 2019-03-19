<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs = perfil::all();

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
        $model = new Perfil();

        $model->nombres = $request['nombres'];
        $model->apellidos = $request['apellidos'];
        $model->sexo_id = $request['sexo_id'];
        $model->cargo_id = $request['cargo_id'];
        $model->entidad_id = $request['entidad_id'];
        $model->user_id = $request['user_id'];

        $model->save();
        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil, $id)
    {
        $registrosencontrados  = perfil::find($id);
        return $registrosencontrados;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        return view('editarperfil', ['perfil' => $perfil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
        $perfil->nombres = $request['nombres'];
        $perfil->apellidos = $request['apellidos'];
        $perfil->sexo_id = $request['sexo_id'];
        $perfil->cargo_id = $request['cargo_id'];
        $perfil->entidad_id = $request['entidad_id'];
        $perfil->user_id = $request['user_id'];
        $perfil->save();
        return $perfil;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(perfil $perfil)
    {
        $perfil->delete();
        return redirect('/perfil/listas');
    }

    public function list()
    {
        $rs = $this->index();
        return view('listaperfil', ['rs' => $rs]);
    }

}
