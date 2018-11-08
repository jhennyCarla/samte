<?php

use Illuminate\Database\Seeder;

class usuarioAsignarSubRolSeeder extends Seeder
{
    public function run()
    {
    	// admin weymar
        App\Usuario_asignar_sub_rol::create([
			'cod_sis'=>'201001230',
			'fecha_inicio'=>'2000-03-10',
			'fecha_fin'=>'2030-03-10',
			'activo'=>'SI',
			'id_funcion'=>'3',
			'id_sub_rol'=>'1',
			'id_unidad'=>'11',
			'id_usuario'=>'1'

         ]);
        // admin tati
        App\Usuario_asignar_sub_rol::create([
            'cod_sis'=>'201001231',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'3',
            'id_sub_rol'=>'1',
            'id_unidad'=>'11',
            'id_usuario'=>'2'

         ]);
        // admin liz
        App\Usuario_asignar_sub_rol::create([
            'cod_sis'=>'201006666',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'3',
            'id_sub_rol'=>'1',
            'id_unidad'=>'11',
            'id_usuario'=>'3'

         ]);
        // decano
        App\Usuario_asignar_sub_rol::create([

            'cod_sis'=>'201154876',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'11',
            'id_sub_rol'=>'7',
            'id_unidad'=>'6',
            'id_usuario'=>'4'

         ]);
        // director academico
        App\Usuario_asignar_sub_rol::create([

            'cod_sis'=>'2008012744',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'10',
            'id_sub_rol'=>'7',
            'id_unidad'=>'7',
            'id_usuario'=>'5'
 
         ]);
        App\Usuario_asignar_sub_rol::create([
        // jefe taller conta
            'cod_sis'=>'3526566',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'2',
            'id_sub_rol'=>'1',
            'id_unidad'=>'9',
            'id_usuario'=>'6'

         ]);
        App\Usuario_asignar_sub_rol::create([
            // secretaria de conta
            'cod_sis'=>'200301849',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'9',
            'id_sub_rol'=>'4',
            'id_unidad'=>'9',
            'id_usuario'=>'7'

         ]);
        App\Usuario_asignar_sub_rol::create([
            // secretaria de admin
            'cod_sis'=>'200301850',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'9',
            'id_sub_rol'=>'4',
            'id_unidad'=>'8',
            'id_usuario'=>'8'

         ]);


        App\Usuario_asignar_sub_rol::create([
            // jefe taller eco
            'cod_sis'=>'200301408',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'2',
            'id_sub_rol'=>'7',
            'id_unidad'=>'10',
            'id_usuario'=>'9'

         ]);

        App\Usuario_asignar_sub_rol::create([
            // docente 1
            'cod_sis'=>'200301506',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'1',
            'id_sub_rol'=>'7',
            'id_unidad'=>'7',
            'id_usuario'=>'10'

         ]);
        App\Usuario_asignar_sub_rol::create([
            // docente 2
            'cod_sis'=>'200304444',
            'fecha_inicio'=>'2000-03-10',
            'fecha_fin'=>'2030-03-10',
            'activo'=>'SI',
            'id_funcion'=>'1',
            'id_sub_rol'=>'7',
            'id_unidad'=>'7',
            'id_usuario'=>'11'

         ]);
 
    }
}
