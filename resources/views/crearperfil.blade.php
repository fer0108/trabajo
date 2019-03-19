
<form action="/perfil" method="POST" role="form">
    @csrf()
    <legend>guardar cambios</legend>

    <div class="form-group">
        <label for="">NOMBRE</label>
        <input type="text" class="form-control" id="nombres" name="nombres"placeholder="escriba el valor del campo">
        <div>
        <label for="">APELLIDOS</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos"placeholder="escriba el valor del campo">
        <div>
        <label for="">SEXO !H! !M!</label>
        <input type="text" class="form-control" id="sexo_id" name="sexo_id"placeholder="escriba el valor del campo">
        <div>
        <label for="">CARGOS</label>
        <input type="text" class="form-control" id="cargo_id" name="cargo_id"placeholder="escriba el valor del campo">
        <div>
        <label for="">ENTIDADES</label>
        <input type="text" class="form-control" id="entidad_id" name="entidad_id"placeholder="escriba el valor del campo">
        <div>
        <label for="">USUARIOS</label>
        <input type="text" class="form-control" id="user_id" name="user_id"placeholder="escriba el valor del campo">
        <div>


    

    <button type="guardar chatel" class="btn btn-primary">GUARDAR</button>
</form>
