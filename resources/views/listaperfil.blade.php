<table class="table table-hover">
    <thead>
        <tr>
            <th>Perfil</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->nombres}}</td>
            <td>{{$item->apellidos}}</td>
            <td>{{$item->sexo_id}}</td>
            <td>{{$item->cargo_id}}</td>
            <td>{{$item->entidad_id}}</td>
            <td>{{$item->user_id}}</td>

            <td>
                <a href="/perfil/edit/{{$item->id}}">Editar</a>

                <form action="{{url('perfil', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                    @csrf()
                    @method('DELETE')
                <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">Eliminar</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>