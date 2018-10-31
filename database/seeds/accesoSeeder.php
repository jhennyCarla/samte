<?php
 
use Illuminate\Database\Seeder;

class accesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        App\Acceso::create([

        	'nombre_acceso' =>'ADMINISTRACIÓN DE USUARIOS',
			'ruta_acceso' =>'usuarios.index',
			'descripcion_acceso' =>'MÓDULO PRINCIPAL QUE TRABAJA CON LA INFORMACIÓN PRINCIPAL DE USUARIO, LAS OPCIONES QUE PUEDE UTILIZAR SE HAYAN EN EL MENÚ SUPERIOR O EL DE LA PARTE IZQUIERDA.',
			'icono_acceso' =>'iconoMenuAdministracionUsuarios.png',
			'defecto_acceso' => 'NO',
         ]);
        App\Acceso::create([

        	'nombre_acceso' =>'ADMINISTRACIÓN DE PERMISOS',
			'ruta_acceso' =>'accesos.index',
			'descripcion_acceso' =>'MÓDULO DONDE SE CONFIGURA LA ASIGNACIÓN DE PERMISOS A LAS DIFERENTES FUNCIONALIDADES DEL SISTEMA.',
			'icono_acceso' =>'iconoMenuAdministracionGrupos.png',
			'defecto_acceso' =>'NO',
         ]);

        App\Acceso::create([

            'nombre_acceso' =>'ADMINISTRACIÓN DE GESTIONES',
            'ruta_acceso' =>'gestiones.index',
            'descripcion_acceso' =>'MÓDULO PRINCIPAL QUE TRABAJA CON LA INFORMACIÓN PRINCIPAL DE USUARIO, LAS OPCIONES QUE PUEDE UTILIZAR SE HAYAN EN EL MENÚ SUPERIOR O EL DE LA PARTE IZQUIERDA.',
            'icono_acceso' =>'iconoMenuAdministracionUsuarios.png',
            'defecto_acceso' => 'NO',
         ]);
        App\Acceso::create([

            'nombre_acceso' =>'ADMINISTRACIÓN DE TITULACIÓN',
            'ruta_acceso' =>'titulaciones.index',
            'descripcion_acceso' =>'MÓDULO DONDE SE CONFIGURA LA ASIGNACIÓN DE PERMISOS A LAS DIFERENTES FUNCIONALIDADES DEL SISTEMA.',
            'icono_acceso' =>'iconoMenuAdministracionGrupos.png',
            'defecto_acceso' =>'NO',
         ]);

        App\Acceso::create([

            'nombre_acceso' =>'REPORTES',
            'ruta_acceso' =>'resportes.index',
            'descripcion_acceso' =>'MÓDULO PRINCIPAL QUE TRABAJA CON LA INFORMACIÓN PRINCIPAL DE USUARIO, LAS OPCIONES QUE PUEDE UTILIZAR SE HAYAN EN EL MENÚ SUPERIOR O EL DE LA PARTE IZQUIERDA.',
            'icono_acceso' =>'iconoMenuAdministracionUsuarios.png',
            'defecto_acceso' => 'NO',
         ]);
        App\Acceso::create([

            'nombre_acceso' =>'ADMINISTRACIÓN DE EXAMEN DE GRADO',
            'ruta_acceso' =>'examen.index',
            'descripcion_acceso' =>'MÓDULO DONDE SE CONFIGURA LA ASIGNACIÓN DE PERMISOS A LAS DIFERENTES FUNCIONALIDADES DEL SISTEMA.',
            'icono_acceso' =>'iconoMenuAdministracionGrupos.png',
            'defecto_acceso' =>'NO',
         ]);


    }
}
