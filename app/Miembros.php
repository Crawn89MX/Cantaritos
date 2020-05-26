<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Miembros extends Model
{
    //
    public $timestamps = false;
    protected $guarded = [];

    public function getNombreAttribute($value){
        return ucwords($value);
    }

    public function getEmailAttribute($value){
        return strtolower($value);
    }

    public function setNombreAttribute($value){
        return strtolower($value);
    }
}
