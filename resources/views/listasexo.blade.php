<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTA DE SEXO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<table class="table table-hover">
    <thead>
        <tr>
            <th>sexos</th>
            <th>opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->sexo}}</td>
            <td>
            <a href="/sexo/edit/{{$item->id}}">Editar</a>
            <form action="{{url('sexo', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
            @csrf()
            @method('DELETE')
        <a href="javascript:{}" Onclick="document.getElementById('delete_form_{{$item->id}}').submit();">Eliminar</a>
        </form>
        </td>

        </tr>
        @endforeach
    </tbody>
</table>



</body>
</html>


