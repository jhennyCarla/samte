<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModalidadTitulacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalidad_titulaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_modalidad',30);
            $table->string('abreviacion_modalidad',10)->nullable();
            $table->string('descripcion_modalidad',100)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modalidad_titulaciones');
    }
}
