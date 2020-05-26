<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenPreparadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_preparadas', function (Blueprint $table) {
            $table->bigIncrements('ID')->unique();
            $table->string('Mesa');
            $table->bigInteger('ID_Receta');
            $table->foreign('ID_Receta')->references('id')->('recetas');
            $table->string('Ingredientes_Alternativos');
            $table->string('Precio');

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
        Schema::dropIfExists('orden_preparadas');
    }
}
