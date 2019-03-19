<form action="{{url('user', $user->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend><strong>USUARIO</strong></legend>

        <div class="form-group">
            <label for="">Nombre</label>
            <input value="{{$user->name}}" name="name" type="text" class="form-control" id="name" placeholder="Ingresar el Nombre">
        </div>
        <div class="form-group">
            <label for="">Correo</label>
            <input value="{{$user->email}}" name="email" type="text" class="form-control" id="email" placeholder="Ingresar el Correo">
        </div>
        <div class="form-group">
            <label for="">Contraseña</label>
            <input value="{{$user->password}}" name="password" type="text" class="form-control" id="password" placeholder="Ingresar Contraseña">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>