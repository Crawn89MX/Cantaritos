<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenPreparada extends Model
{
    //
    public $timestamps = false;
    protected $guarded = [];

    public function receta()
    {
        return $this->belongsTo(Receta::class,'ID_Receta');
    }
}
