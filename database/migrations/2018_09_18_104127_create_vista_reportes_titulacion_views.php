<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVistaReportesTitulacionViews extends Migration
{
    public function up()
    {
        DB::statement("CREATE or replace VIEW vista_reporte_titulacion AS(
        SELECT a.id as id_usuario, a.nombres as nombres, a.apellidos apellidos, a.sexo genero, b.cod_sis cod_sis, e.nota nota_defensa,f.titulo_defensa titulo_defensa, f.empresa empresa,g.id id_modalidad,g.nombre_modalidad nombre_modalidad,i.id id_plan, i.nombre_plan nombre_plan,i.cod_plan cod_plan, j.anio anio, j.periodo periodo, l.fecha_defensa fecha_defensa
        FROM usuarios a
        JOIN usuario_asignar_sub_roles b ON b.id_usuario=a.id
        JOIN inscripciones c ON c.id_usuario_asignar_sub_rol=b.id
        JOIN inscripcion_grupo_materia_plan_gestion_unidades d ON d.id_inscripcion=c.id
        JOIN estudiante_defensas e ON e.id_inscripcion_grupo_materia_plan_gestion_unidad=d.id
        JOIN defensas f ON f.id=e.id_defensa
        JOIN modalidad_titulaciones g ON g.id=f.id_modalidad_titulacion
        JOIN plan_gestion_unidades h ON h.id=c.id_plan_gestion_unidad
        JOIN planes i ON i.id=h.id_plan
        JOIN gestiones j ON j.id=h.id_gestion
        JOIN unidades k ON k.id=h.id_unidad
        JOIN defensa_ambientes l ON l.id_defensa=f.id
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
        DB::statement('DROP VIEW IF EXISTS vista_reporte_titulacion');
    }
}
