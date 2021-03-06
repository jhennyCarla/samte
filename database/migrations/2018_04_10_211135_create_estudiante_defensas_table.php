<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteDefensasTable extends Migration
{
    public function up()
    {
        Schema::create('estudiante_defensas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nota')->nullable();
            $table->string('nota_literal',20)->nullable();
            $table->string('resultado_final',20)->nullable();
            $table->string('observacion',300)->nullable()->default('NINGUNA');
            
            $table->integer('id_inscripcion_grupo_materia_plan_gestion_unidad')->unsigned();
            $table->integer('id_defensa')->unsigned();

            $table->foreign('id_inscripcion_grupo_materia_plan_gestion_unidad','id_ins_gr_mat_plan_gest_unid')->references('id')->on('inscripcion_grupo_materia_plan_gestion_unidades')->onDelete('cascade');
            $table->foreign('id_defensa')->references('id')->on('defensas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('estudiante_defensas');
    }
}
