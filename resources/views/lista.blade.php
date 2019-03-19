<table class="table table-hover">
    <thead>
        <tr>
            <th>entidad</th>
            <th>opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->entidad}}</td>
            <td>
            <a href="/entidades/edit/{{$item->id}}">Editar</a>
            <form action="{{url('entidades', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
            @csrf()
            @method('DELETE')
        <a href="javascript:{}" Onclick="document.getElementById('delete_form_{{$item->id}}').submit();">Eliminar</a>
        </form>
        </td>

        </tr>
        @endforeach
    </tbody>
</table>

