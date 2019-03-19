<table class="table table-hover">
    <thead>
        <tr>
            <th>USUARIOS</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
     
           

            <td>
                <a href="/user/edit/{{$item->id}}">Editar</a>

                <form action="{{url('user', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                    @csrf()
                    @method('DELETE')
                <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">Eliminar</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>