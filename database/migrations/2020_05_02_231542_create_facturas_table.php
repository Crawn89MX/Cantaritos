<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('ID')->unique();
            $table->string("Nombre");
            $table->string("Apellido_Pat");
            $table->string("Apellido_Mat");
            $table->string("Domicilio");
            $table->string("RFC");
            $table->string("Monto");
            $table->string("Condiciones");
            $table->string("Metodo");
            $table->string("Cantidad_Descripcion");
            //$table->timestamps();

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
        Schema::dropIfExists('facturas');
    }
}
