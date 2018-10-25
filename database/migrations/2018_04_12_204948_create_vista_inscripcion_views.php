<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVistaInscripcionViews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE or replace VIEW vista_inscripcion AS
            (
            SELECT f.id_usuario as id_usuario,f.id as id_usuario_asignar_sub_rol,g.doc_identidad as doc_identidad,g.apellidos as apellidos,g.nombres as nombres,g.sexo as sexo,g.fecha_nac as fecha_nac, f.id_sub_rol as id_sub_rol,f.cod_sis as cod_sis,a.id as id_inscripcion,a.ins_activo as insc_activa,a.observacion as observaciones,a.tipo_inscripcion as tipo_inscripcion,a.lugar_clases as lugar_clases, a.horario_clases as horario_clases,b.id as id_plan_gestion_unidad,c.id as id_gestion,c.anio as anio,c.periodo as periodo,c.activo as activa_ins,d.id as id_plan,d.cod_plan as cod_plan,d.nombre_plan as nombre_plan,e.categoria as categoria,e.nombre_tipo_gestion as nombre_tipo_gestion,e.tipo_gestion as tipo_gestion,a.cod_inscripcion as cod_inscripcion,a.insc_tesis as insc_tesis, a.ins_gr_eg as ins_gr_eg, a.ex_gr_estado as ex_gr_estado
            FROM inscripciones a
            JOIN plan_gestion_unidades b ON b.id=a.id_plan_gestion_unidad
            JOIN gestiones c ON c.id=b.id_gestion
            JOIN planes d ON d.id = b.id_plan
            JOIN tipo_gestiones e ON e.id = c.id_tipo_gestion
            JOIN usuario_asignar_sub_roles f ON f.id = a.id_usuario_asignar_sub_rol 
            JOIN usuarios g ON g.id = f.id_usuario
            order by g.id
            )
            ");

        


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS vista_inscripcion');
    }
}
