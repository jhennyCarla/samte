<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitulacionGestPlanAreaGrDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulacion_gest_plan_area_gr_docentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grupo',10);
            $table->enum('activo_notas',['SI','NO'])->default('SI');
            $table->enum('activo_correccion',['SI','NO'])->default('NO');
            $table->enum('activo_recuperatorio',['SI','NO'])->default('NO');
            $table->enum('activo_est_ver_nota',['SI','NO'])->default('NO');
            $table->integer('id_gestion')->unsigned();
            $table->integer('id_usuario_asignar_sub_rol')->unsigned();
            $table->integer('id_titulacion_plan_area')->unsigned();

            $table->foreign('id_titulacion_plan_area','id_tit_pl_area')->references('id')->on('titulacion_plan_areas')->onDelete('cascade');
            $table->foreign('id_usuario_asignar_sub_rol','id_usu_asig_subrol')->references('id')->on('usuario_asignar_sub_roles')->onDelete('cascade');
            $table->foreign('id_gestion')->references('id')->on('gestiones')->onDelete('cascade');
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
        Schema::dropIfExists('titulacion_gest_plan_area_gr_docentes');
    }
}
