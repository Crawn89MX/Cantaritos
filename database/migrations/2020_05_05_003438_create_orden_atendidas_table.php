<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenAtendidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_atendidas', function (Blueprint $table) {
            $table->bigIncrements('ID')->unique();
            $table->string('Mesa');
            $table->bigInteger('ID_Receta');
            $table->string('Ingredientes_Alternativos');
            $table->string('Precio');
            $table->bigInteger("ID_Facturacion");

            $table->integer('Pagado')->default(0);
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
        Schema::dropIfExists('orden_atendidas');
    }
}
