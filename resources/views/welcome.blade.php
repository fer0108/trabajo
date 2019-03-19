@extends('layouts.app')

@section('content')
<!DOCTYPE html>

<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

<h1>INICIO </h1>
    <div>


    <table class="table table-hover">
    <thead>
        <tr>
            <th>ENTIDAD</th>
            
        </tr>
    </thead>
    <tbody>
       
        <tr>
           
            <td>
            <a href="/entidades/list/">Listas</a>
            <div>
            <a href="/entidades/create">crear</a>

        </tr>
   <thead>
        <tr>
            
            <th>PERFIL</th>

        </tr>
        <tr>            
           <td>
           <a href="/perfil/listas/">Listas</a>
           <div>
           <a href="/perfil/create">crear</a>

       </tr>

    </thead>

    <thead>
        <tr>
            
            <th>CARGOS</th>

        </tr>
        <tr>            
           <td>
           <a href="/cargo/list/">Listas</a>
           <div>
           <a href="/cargo/create">crear</a>

       </tr>

    </thead>

    <thead>
        <tr>
            
            <th>INCIDENCIAS</th>

        </tr>
        <tr>            
           <td>
           <a href="/incidencia/list/">Listas</a>
           <div>
           <a href="/incidencia/create">crear</a>

       </tr>

    </thead>

    <thead>
        <tr>
            
            <th>TIPOS DE INCIDENCIAS</th>

        </tr>
        <tr>            
           <td>
           <a href="/tipoincidencia/list/">Listas</a>
           <div>
           <a href="/tipoincidencia/create">crear</a>

       </tr>

    </thead>

    <thead>
        <tr>
            
            <th>MODULOS</th>

        </tr>
        <tr>            
           <td>
           <a href="/modulos/list/">Listas</a>
           <div>
           <a href="/modulos/create">crear</a>

       </tr>

    </thead>

    <thead>
        <tr>
            
            <th>USUARIOS</th>

        </tr>
        <tr>            
           <td>
           <a href="/user/list/">Listas</a>
           <div>
           <a href="/user/create">crear</a>

       </tr>

    </thead>

    <thead>
        <tr>
            
            <th>SEXOS</th>

        </tr>
        <tr>            
           <td>
           <a href="/sexo/list/">Listas</a>
           <div>
           <a href="/sexo/create">crear</a>

       </tr>

    </thead>





    </tbody>
</table>



     


</body>
@endsection
</html>

