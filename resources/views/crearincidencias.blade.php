
<form action="/incidencia" method="POST" role="form">
    @csrf()
    <legend>guardar cambios</legend>

    <div class="form-group">
        <label for="">TITULO</label>
        <input type="text" class="form-control" id="titulo" name="titulo"placeholder="escriba el valor del campo">
        <div>
        <label for="">DESCRIPCION</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion"placeholder="escriba el valor del campo">
        <div>
        <label for="">MODULO</label>
        <input type="text" class="form-control" id="modulo_id" name="modulo_id"placeholder="escriba el valor del campo">
        <div>
        <label for="">TIPO INCIDENCIA</label>
        <input type="text" class="form-control" id="tipo_incidencia_id" name="tipo_incidencia_id"placeholder="escriba el valor del campo">
        <div>
        <label for="">USUARIOS</label>
        <input type="text" class="form-control" id="user_id" name="user_id"placeholder="escriba el valor del campo">
        <div>


    

    <button type="guardar chatel" class="btn btn-primary">GUARDAR</button>
</form>
