<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitulacionNotaAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulacion_nota_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nota_examen');
            $table->integer('correccion_nota');
            $table->integer('nota_recuperatorio');
            $table->integer('promedio_final');
            $table->enum('resultado_final',['APROBADO','REPROBADO','ABANDONO'])->default('ABANDONO');

            $table->integer('id_titulacion_ins_area')->unsigned();

            $table->foreign('id_titulacion_ins_area')->references('id')->on('titulacion_ins_areas')->onDelete('cascade');

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
        Schema::dropIfExists('titulacion_nota_areas');
    }
}
