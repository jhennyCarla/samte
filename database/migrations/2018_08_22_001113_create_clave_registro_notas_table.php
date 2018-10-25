<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaveRegistroNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clave_registro_notas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_asignacion');
            $table->string('clave1',2);
            $table->string('clave2',2);
            $table->string('clave3',2); 
            $table->string('clave4',2);

            $table->integer('id_usuario')->unsigned();
            $table->integer('id_grupo_doc_mat_plan_gest_unid')->unsigned();
            $table->integer('id_titulacion_gest_plan_area_gr_doc')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
            $table->foreign('id_grupo_doc_mat_plan_gest_unid','id_gr_doc_mat_pl_ges_uni')->references('id')->on('grupo_doc_mat_plan_gestion_unidades')->onDelete('cascade');
            $table->foreign('id_titulacion_gest_plan_area_gr_doc')->references('id')->on('titulacion_gest_plan_area_gr_docentes')->onDelete('cascade');

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
        Schema::dropIfExists('clave_registro_notas');
    }
}
