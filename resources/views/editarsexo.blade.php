<form action="{{url('sexo', $sexo->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>EDITAR SEXO</legend>

        <div class="form-group">
            <label for="">Nombre de la entidad</label>
            <input value="{{$sexo->sexo}}" name="sexo" type="text" class="form-control" id="sexo" placeholder="Input field">
        </div>

        

        <button type="submit" class="btn btn-primary">editar</button>
    </form>