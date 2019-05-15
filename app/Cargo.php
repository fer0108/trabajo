<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    

public function perfil()
    {

        return $this-> belongsTo(perfil::class);

    }
}