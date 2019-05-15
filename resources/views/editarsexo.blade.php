<form action="{{url('sexo', $sexo->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        

        <div class="form-group">
        @component('componentes.text', ['name' => 'sexos', 'label' => 'EDITAR SEXO'])
        @endcomponent

        

        <button type="submit" class="btn btn-primary">editar</button>
    </form>