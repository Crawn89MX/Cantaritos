<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->bigIncrements('ID')->unique();
            $table->string('Imagen');
            $table->string('Nombre')->unique();
            $table->string('Descripcion');
            $table->string('Costo');
            $table->string('Clasificacion');
            $table->longText('Ingredientes');
            $table->longText('Preparacion');
            $table->string('Condimentos_Alternativos');

            $table->integer('Borrado')->default(0);
            $table->timestamp('FechaCreacion')->useCurrent();
            $table->timestamp('FechaModificacion')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetas');
    }
}
