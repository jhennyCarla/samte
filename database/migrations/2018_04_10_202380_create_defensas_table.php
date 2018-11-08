<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefensasTable extends Migration
{
    public function up()
    {
        Schema::create('defensas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_defensa',100)->nullable();
            $table->string('descripcion',100)->nullable();
            $table->char('avance')->nullable();
            $table->string('resumen',500)->nullable();
            $table->string('empresa',100)->nullable();
            $table->string('grupo_ptaang',5)->nullable();
            $table->string('facultad',50)->nullable();
            $table->string('modalidad_ptaang',30)->nullable();
            $table->string('version',30)->nullable();
            $table->string('expedido',10)->nullable();
            $table->string('universidad',50)->nullable();
            $table->string('numero_resolucion',60)->nullable();
            $table->string('autoridad',60)->nullable();
            $table->date('fecha_resolucion')->nullable();
            $table->integer('id_modalidad_titulacion')->unsigned();
            
            
            $table->foreign('id_modalidad_titulacion')->references('id')->on('modalidad_titulaciones')->onDelete('cascade');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('defensas');
    }
}
