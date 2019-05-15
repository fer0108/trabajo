
<form action="/sexo" method="POST" role="form">
    @csrf()
    <legend>ENTIDAD</legend>
    <div>

    <div class="form-group">
 
    @component('componentes.text', ['name' => 'sexo', 'label' => 'SEXO', 'placeholder' =>'Ingrese el Nombre'])
        @endcomponent

    

    <button type="guardar chatel" class="btn btn-primary">GUARDAR</button>
</form>
