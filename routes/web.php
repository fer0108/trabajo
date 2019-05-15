<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

route::get('entidades/edit/{entidad}', 'EntidadController@edit');
route::get('entidades/list', 'EntidadController@list');
route::get('entidades/create', function(){

    return view('crear');
  
});

route::get('entidades', 'EntidadController@index');
route::get('entidades/{id}', 'EntidadController@show');
route::post('entidades', 'EntidadController@store');
route::patch('entidades/{entidad}', 'EntidadController@update');
route::delete('entidades/{entidad}', 'EntidadController@destroy');

//PERFIL:

Auth::routes();

route::get('perfil/edit/{perfil}', 'PerfilController@edit');
route::get('perfil/listas', 'PerfilController@list');
Route::get('perfil/create','PerfilController@create');

route::get('perfil', 'PerfilController@index');
route::get('perfil/{id}', 'PerfilController@show');
route::post('perfil', 'PerfilController@store');
route::patch('perfil/{perfil}', 'PerfilController@update');
route::delete('perfil/{perfil}', 'PerfilController@destroy');

//CARGOS:

Auth::routes();

route::get('cargo/edit/{cargo}', 'CargoController@edit');
route::get('cargo/list', 'CargoController@list');
route::get('cargo/create', function(){

    return view('crearcargo');
});

route::get('cargo', 'CargoController@index');
route::get('cargo/{id}', 'CargoController@show');
route::post('cargo', 'CargoController@store');
route::patch('cargo/{cargo}', 'CargoController@update');
route::delete('cargo/{cargo}', 'CargoController@destroy');

//INCIDENCIAS:

Auth::routes();

route::get('incidencia/edit/{incidencia}', 'incidenciaController@edit');
route::get('incidencia/list', 'incidenciaController@list');
route::get('incidencia/create', function(){

    return view('crearincidencias');
});

route::get('incidencia', 'incidenciaController@index');
route::get('incidencia/{id}', 'incidenciaController@show');
route::post('incidencia', 'incidenciaController@store');
route::patch('incidencia/{incidencia}', 'incidenciaController@update');
route::delete('incidencia/{incidencia}', 'incidenciaController@destroy');

//tipo_incidencias

Auth::routes();

route::get('tipoincidencia/edit/{tipo}', 'tipoincidenciaController@edit');
route::get('tipoincidencia/list', 'tipoincidenciaController@list');
route::get('tipoincidencia/create', function(){

    return view('creartipo');
});

route::get('tipoincidencia', 'tipoincidenciaController@index');
route::get('tipoincidencia/{id}', 'tipoincidenciaController@show');
route::post('tipoincidencia', 'tipoincidenciaController@store');
route::patch('tipoincidencia/{tipo}', 'tipoincidenciaController@update');
route::delete('tipoincidencia/{tipo}', 'tipoincidenciaController@destroy');


//modulos

Auth::routes();

route::get('modulos/edit/{modulos}', 'moduloController@edit');
route::get('modulos/list', 'moduloController@list');
route::get('modulos/create', function(){

    return view('crearmodulo');
});

route::get('modulos', 'moduloController@index');
route::get('modulos/{id}', 'moduloController@show');
route::post('modulos', 'moduloController@store');
route::patch('modulos/{modulos}', 'moduloController@update');
route::delete('modulos/{modulos}', 'moduloController@destroy');


//user

Auth::routes();

route::get('user/edit/{user}', 'userController@edit');
route::get('user/list', 'userController@list');
route::get('user/create', function(){

    return view('crearusers');
});

route::get('user', 'userController@index');
route::get('user/{id}', 'userController@show');
route::post('user', 'userController@store');
route::patch('user/{user}', 'userController@update');
route::delete('user/{user}', 'userController@destroy');

//sexo

Auth::routes();

route::get('sexo/edit/{sexo}', 'sexoController@edit');
route::get('sexo/list', 'sexoController@list');
route::get('sexo/create', function(){

    return view('crearsexo');
});

route::get('sexo', 'sexoController@index');
route::get('sexo/{id}', 'sexoController@show');
route::post('sexo', 'sexoController@store');
route::patch('sexo/{sexo}', 'sexoController@update');
route::delete('sexo/{sexo}', 'sexoController@destroy');

