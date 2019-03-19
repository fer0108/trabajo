    <form action="{{url('entidades', $entidad->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>EDITAR ENTIDAD</legend>

        <div class="form-group">
            <label for="">Nombre de la entidad</label>
            <input value="{{$entidad->entidad}}" name="entidad" type="text" class="form-control" id="entidad" placeholder="Input field">
        </div>

        

        <button type="submit" class="btn btn-primary">editar</button>
    </form>