<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    //

    public $timestamps = false;
    protected $guarded = [];


    public function getNombreAttribute($value){
        return ucwords($value);
    }
}

