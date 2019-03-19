
<form action="/cargo" method="POST" role="form">
    @csrf()
    <legend>AGREGAR</legend>

    <div class="form-group">
        <label for="">CARGOS</label>
        <input type="text" class="form-control" id="cargo" name="cargo"placeholder="escriba el valor del campo">
    </div>

    

    <button type="guardar chatel" class="btn btn-primary">GUARDAR</button>
</form>
