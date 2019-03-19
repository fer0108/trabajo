
<form action="/user" method="POST" role="form">
    @csrf()
    <legend>guardar cambios</legend>
<div>

    <div class="form-group">
        <label for="">NOMBRE</label>
        <input type="text" class="form-control" id="name" name="name"placeholder="escriba el valor del campo">
        <div>
        <label for="">EMAIL</label>
        <input type="text" class="form-control" id="email" name="email"placeholder="escriba el valor del campo">
        <div>
        <label for="">EMAIL VERIFICADO</label>
        <input type="text" class="form-control" id="email_verified_at" name="email_verified_at"placeholder="escriba el valor del campo">
        <div>
        <label for="">CONTRASEÑA</label>
        <input type="text" class="form-control" id="password" name="password"placeholder="escriba el valor del campo">
        <div>
        


    

    <button type="guardar chatel" class="btn btn-primary">GUARDAR</button>
</form>
