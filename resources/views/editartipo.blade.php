<form action="{{url('tipoincidencia', $tipo->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Agregar cargos</legend>

        <div class="form-group">
            <label for="">Nombre de los incidencia</label>
            <input value="{{$tipo->tipo}}" name="tipo" type="text" class="form-control" id="tipo" placeholder="Input field">
        </div>

        

        <button type="submit" class="btn btn-primary">editar</button>
    </form>