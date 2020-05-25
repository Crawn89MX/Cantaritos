<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    //

    public $timestamps = false;



    
    public function atendidas()
    {
        return $this->hasMany(Receta::class,'ID_Receta');
    }
    public function preparadas()
    {
        return $this->hasMany(Receta::class,'ID_Receta');
    }
    public function pedidas()
    {
        return $this->hasMany(Receta::class,'ID_Receta');
    }
}

