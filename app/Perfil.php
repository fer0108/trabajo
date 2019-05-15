<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfiles';
    public function sexo()
    {

        return $this-> belongsTo(sexo::class);

    }

    public function entidad()
    {

        return $this-> belongsTo(entidad::class);

    }

    public function cargo()
    {

        return $this-> belongsTo(cargo::class);

    }
    public function name()
    {

        return $this-> belongsTo(User::class);

    }
}
