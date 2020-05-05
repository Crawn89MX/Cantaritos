<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenPedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_pedidas', function (Blueprint $table) {
            $table->bigIncrements('ID')->unique();
            $table->string('Mesa');
            $table->bigInteger('ID_Receta');
            $table->string('Ingredientes_Alternativos');
            $table->string('Precio');
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
        Schema::dropIfExists('orden_pedidas');
    }
}
