<table class="table table-hover">
    <thead>
        <tr>
            <th>CARGOS</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->cargo}}</td>
            <td>
            <a href="/cargo/edit/{{$item->id}}">Editar</a>
            <form action="{{url('cargo', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
            @csrf()
            @method('DELETE')
        <a href="javascript:{}" Onclick="document.getElementById('delete_form_{{$item->id}}').submit();">Eliminar</a>
        </form>
        </td>

        </tr>
        @endforeach
    </tbody>
</table>

