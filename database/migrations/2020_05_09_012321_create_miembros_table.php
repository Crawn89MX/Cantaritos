<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembros', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('Nombre');
            $table->string('Apellido_Pat');
            $table->string('Apellido_Mat');
            $table->string('Consumo');
            $table->string('Puntos_Gastados');
            $table->string('Correo');
            $table->string('Correo_Encriptado');
            $table->string('Password');
            $table->integer('Verificado')->default(0);
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
        Schema::dropIfExists('miembros');
    }
}
