<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //

    public $timestamps = false;
    protected $guarded = [];

    public function atendida()
    {
        return $this->hasMany(OrdenAtendida::class,'ID_Facturacion');
    }
}
