<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitulacionInsAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulacion_ins_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_ins_area',20);

            $table->integer('id_titulacion_gest_plan_area_gr_doc')->unsigned();
            $table->integer('id_inscripcion')->unsigned();

            $table->foreign('id_titulacion_gest_plan_area_gr_doc','id_tit_ges_pl_area_gr_doc')->references('id')->on('titulacion_gest_plan_area_gr_docentes')->onDelete('cascade');
            $table->foreign('id_inscripcion')->references('id')->on('inscripciones')->onDelete('cascade');

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
        Schema::dropIfExists('titulacion_ins_areas');
    }
}
