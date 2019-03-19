<table class="table table-hover">
    <thead>
        <tr>
            <th>Incidencias</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->titulo}}</td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->modulo_id}}</td>
            <td>{{$item->tipo_incidencia_id}}</td>
            <td>{{$item->user_id}}</td>

            <td>
                <a href="/incidencia/edit/{{$item->id}}">Editar</a>

                <form action="{{url('incidencia', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                    @csrf()
                    @method('DELETE')
                <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">Eliminar</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>