<form action="{{url('cargo', $cargo->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Agregar cargos</legend>

        <div class="form-group">
            <label for="">Nombre de los cargos</label>
            <input value="{{$cargo->cargo}}" name="cargo" type="text" class="form-control" id="cargo" placeholder="Input field">
        </div>

        

        <button type="submit" class="btn btn-primary">editar</button>
    </form>