<form action="{{url('modulos', $modulo->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>EDITAR ENTIDAD</legend>

        <div class="form-group">
            <label for="">Nombre de la entidad</label>
            <input value="{{$modulo->modulo}}" name="modulo" type="text" class="form-control" id="modulo" placeholder="Input field">
        </div>

        

        <button type="submit" class="btn btn-primary">editar</button>
    </form>