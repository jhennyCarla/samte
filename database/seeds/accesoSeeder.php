<?php
 
use Illuminate\Database\Seeder;

class accesoSeeder extends Seeder
{
    public function run()
    {
        App\Acceso::create([
        	'nombre_acceso' =>'ADMINISTRACIÓN DE USUARIOS',
			'ruta_acceso' =>'usuarios.index',
			'descripcion_acceso' =>'MÓDULO PRINCIPAL QUE TRABAJA CON LA INFORMACIÓN PRINCIPAL DE USUARIO, LAS OPCIONES QUE PUEDE UTILIZAR SE HAYAN EN EL MENÚ SUPERIOR O EL DE LA PARTE IZQUIERDA.',
			'icono_acceso' =>'fa fa-users',
			'defecto_acceso' => 'NO',
         ]);
        App\Acceso::create([
        	'nombre_acceso' =>'ADMINISTRACIÓN DE PERMISOS',
			'ruta_acceso' =>'accesos.index',
			'descripcion_acceso' =>'MÓDULO DONDE SE CONFIGURA LA ASIGNACIÓN DE PERMISOS A LAS DIFERENTES FUNCIONALIDADES DEL SISTEMA.',
			'icono_acceso' =>'fa fa-address-card',
			'defecto_acceso' =>'NO',
         ]);

        App\Acceso::create([
            'nombre_acceso' =>'ADMINISTRACIÓN DE GESTIONES',
            'ruta_acceso' =>'gestiones.index',
            'descripcion_acceso' =>'MÓDULO PRINCIPAL QUE TRABAJA CON LA INFORMACIÓN DE LAS GESTIONES.',
            'icono_acceso' =>'fa fa-list-ul',
            'defecto_acceso' => 'NO',
         ]);
        App\Acceso::create([
            'nombre_acceso' =>'ADMINISTRACIÓN DE TITULACIÓN',
            'ruta_acceso' =>'titulaciones.index',
            'descripcion_acceso' =>'MÓDULO DONDE VISUALIZAN TODAS LAS OPCIONES DE ADMINITRACIÓN DE TITULACIÓN',
            'icono_acceso' =>'fa fa-graduation-cap',
            'defecto_acceso' =>'NO',
         ]);

        App\Acceso::create([
            'nombre_acceso' =>'REPORTES',
            'ruta_acceso' =>'resportes.index',
            'descripcion_acceso' =>'MÓDULO EN EL QUE SE VIZUALIZA LOS REPORTES NECESARIOS DE LOS TITULADOS',
            'icono_acceso' =>'fa fa-bar-chart-o',
            'defecto_acceso' => 'NO',
         ]);
        App\Acceso::create([
            'nombre_acceso' =>'ADMINISTRACIÓN DE EXAMEN DE GRADO',
            'ruta_acceso' =>'examen.index',
            'descripcion_acceso' =>'MÓDULO VISUALIZAN TODAS LAS OPCIONES DE EXAMEN DE GRADO',
            'icono_acceso' =>' fa fa-paste',
            'defecto_acceso' =>'NO',
         ]);


    }
}
