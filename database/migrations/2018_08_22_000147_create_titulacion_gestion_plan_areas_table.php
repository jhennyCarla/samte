<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitulacionGestionPlanAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulacion_plan_areas', function (Blueprint $table) {
            $table->increments('id');
            
            // $table->integer('id_gestion')->unsigned();
            $table->integer('id_plan')->unsigned();
            $table->integer('id_titulacion_area')->unsigned();

            // $table->foreign('id_gestion')->references('id')->on('gestiones')->onDelete('cascade');
            $table->foreign('id_plan')->references('id')->on('planes')->onDelete('cascade');
            $table->foreign('id_titulacion_area')->references('id')->on('titulacion_areas')->onDelete('cascade');

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
        Schema::dropIfExists('titulacion_plan_areas');
    }
}
