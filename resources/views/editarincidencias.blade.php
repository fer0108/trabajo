<form action="{{url('incidencia', $incidencia->id )}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend><strong>INCIDENCIAS</strong></legend>

        <div class="form-group">
            <label for="">titulo</label>
            <input value="{{$incidencia->titulo}}" name="titulo" type="text" class="form-control" id="titulo" placeholder="Ingresar Nuevo Nombre">
        </div>
        <div class="form-group">
            <label for="">Descripcion</label>
            <input value="{{$incidencia->descripcion}}" name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Ingresar Nuevo Apellido">
        </div>
        <div class="form-group">
            <label for="">Modulo</label>
            <input value="{{$incidencia->modulo_id}}" name="modulo_id" type="text" class="form-control" id="modulo_id" placeholder="Ingresar Sexo">
        </div>
        <div class="form-group">
            <label for="">Tipo incidencia</label>
            <input value="{{$incidencia->tipo_incidencia_id}}" name="tipo_incidencia_id" type="text" class="form-control" id="tipo_incidencia_id" placeholder="Ingresar cargo">
        </div>
        <div class="form-group">
            <label for="">Usuarios</label>
            <input value="{{$incidencia->user_id}}" name="user_id" type="text" class="form-control" id="user_id" placeholder="Ingresar entdidad">
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</body>
</html>