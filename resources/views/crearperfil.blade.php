
<form action="/perfil" method="POST" role="form">
    @csrf()
    <legend>PERFILES</legend>
    <div>
    </div>

    <div class="form-group">
        
        @component('componentes.text', ['name' => 'nombres', 'label' => 'NOMBRES', 'placeholder' =>'Ingrese el Nombre'])
        @endcomponent
        <div>
       
        @component('componentes.text', ['name' => 'apellidos', 'label' => 'APELLIDOS', 'placeholder' =>'Ingrese el apellido'])
        @endcomponent
        
        @component('componentes.select', ['name'=>'sexo_id', 'data' =>$sexos, 'tag'=> 'sexo', 'label'=>'SEXO' ])
        @endcomponent
           
        <div>
        
        @component('componentes.select', ['name'=>'cargo_id', 'data' =>$cargos, 'tag'=> 'cargo', 'label'=>'CARGOS' ])
        @endcomponent
         
            <div>
            
        
        @component('componentes.select', ['name'=>'entidad_id', 'data' =>$entidades, 'tag'=> 'entidad', 'label'=>'ENTIDADES' ])
        @endcomponent
          
            <div>
        
        @component('componentes.select', ['name'=>'user_id', 'data' =>$users, 'tag'=> 'name', 'label'=>'USUARIOS' ])
        @endcomponent
          
       

    

    <button type="guardar chatel" class="btn btn-primary">GUARDAR</button>
</form>
