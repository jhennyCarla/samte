<?php

use Illuminate\Database\Seeder;

class subAccesoSeeder extends Seeder
{
    public function run()
    {
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'BUSCAR USUARIO',
			'ruta_sub_acceso' =>'usuarios.index',
			'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE VISUALIZAR LA INFORMACIÓN DE UN USUARIO REGISTRADO EN EL SISTEMA SEGÚN REQUERIMIENTO.',
			'icono_sub_acceso' =>'fa fa-search',
			'defecto_sub_acceso' =>'NO',
			'id_acceso' => '1'
         ]);        
        App\Sub_acceso::create([
        	'nombre_sub_acceso' =>'CREAR USUARIO',
			'ruta_sub_acceso' =>'usuarios.create',
			'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE CREAR UN NUEVO USUARIO DENTRO DEL SISTEMA.',
			'icono_sub_acceso' =>'fa fa-user-plus',
			'defecto_sub_acceso' =>'NO',
			'id_acceso' => '1'
         ]);
   //      App\Sub_acceso::create([
   //      	'nombre_sub_acceso' =>'EDITAR USUARIO',
			// 'ruta_sub_acceso' =>'usuarios.edit',
			// 'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE EDITAR UN USUARIO DENTRO DEL SISTEMA.',
			// 'icono_sub_acceso' =>'fa fa-edit',
			// 'defecto_sub_acceso' =>'NO',
			// 'id_acceso' => '1'
   //       ]);
   //      App\Sub_acceso::create([
   //      	'nombre_sub_acceso' =>'ELIMINAR USUARIO',
			// 'ruta_sub_acceso' =>'usuarios.destroy',
			// 'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE ELIMINAR UN USUARIO DENTRO DEL SISTEMA.',
			// 'icono_sub_acceso' =>'fa fa-user-times',
			// 'defecto_sub_acceso' =>'NO',
			// 'id_acceso' => '1'
   //       ]);
   //      App\Sub_acceso::create([
   //      	'nombre_sub_acceso' =>'BITACORA USUARIO',
			// 'ruta_sub_acceso' =>'usuarios.verBitacora',
			// 'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE VER LA BITACORA DE UN USUARIO DENTRO DEL SISTEMA.',
			// 'icono_sub_acceso' =>'fa fa-database',
			// 'defecto_sub_acceso' =>'NO',
			// 'id_acceso' => '1'
   //       ]);

   //      App\Sub_acceso::create([
   //      	'nombre_sub_acceso' =>'PERFIL USUARIO',
			// 'ruta_sub_acceso' =>'usuarios.verBitacora',
			// 'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE VER EL PERFIL UN USUARIO DENTRO DEL SISTEMA.',
			// 'icono_sub_acceso' =>'fa fa-user-circle-o',
			// 'defecto_sub_acceso' =>'NO',
			// 'id_acceso' => '1'
   //       ]);
   //       App\Sub_acceso::create([
   //      	'nombre_sub_acceso' =>'ASIGNAR CLAVE USUARIO',
			// 'ruta_sub_acceso' =>'usuarios.asignarClaveNotas',
			// 'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE ASIGNAR CLAVE DE TARJETA A UN USUARIO DENTRO DEL SISTEMA.',
			// 'icono_sub_acceso' =>'fa fa-key',
			// 'defecto_sub_acceso' =>'NO',
			// 'id_acceso' => '1'
   //       ]);

        App\Sub_acceso::create([
        	'nombre_sub_acceso' =>'LISTAR ROL',
			'ruta_sub_acceso' =>'roles.index',
			'descripcion_sub_acceso' =>'ESTA OPCIÓN LE ERMITE EDITAR O ELIMINAR UN ROL SELECCIONADO.',
			'icono_sub_acceso' =>'fa fa-users',
			'defecto_sub_acceso' =>'NO',
			'id_acceso' => '2'
         ]);
        App\Sub_acceso::create([
        	'nombre_sub_acceso' =>'CREAR ROL',
			'ruta_sub_acceso' =>'roles.create',
			'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE CREAR UN NUEVO ROL PARA EL SISTEMA.',
			'icono_sub_acceso' =>'fa fa-plus',
			'defecto_sub_acceso' =>'NO',
			'id_acceso' => '2'
         ]); 

   //       App\Sub_acceso::create([
   //      	'nombre_sub_acceso' =>'EDITAR ROL',
			// 'ruta_sub_acceso' =>'roles.edit',
			// 'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE EDITAR UN ROL PARA EL SISTEMA.',
			// 'icono_sub_acceso' =>'fa fa-pencil',
			// 'defecto_sub_acceso' =>'NO',
			// 'id_acceso' => '2'
   //       ]);
   // 		App\Sub_acceso::create([
   //      	'nombre_sub_acceso' =>'ELIMINAR ROL',
			// 'ruta_sub_acceso' =>'roles.create',
			// 'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE ELIMINAR UN ROL PARA EL SISTEMA.',
			// 'icono_sub_acceso' =>'fa fa-close',
			// 'defecto_sub_acceso' =>'NO',
			// 'id_acceso' => '2'
   //       ]);       
        
        App\Sub_acceso::create([
        	'nombre_sub_acceso' =>'LISTAR SUB-ROL',
			'ruta_sub_acceso' =>'sub_roles.index',
			'descripcion_sub_acceso' =>'ESTA OPCIÓN LE PERMITE EDITAR UN SUB-ROL SELECCIONADO. ',
			'icono_sub_acceso' =>'fa fa-reorder',
			'defecto_sub_acceso' =>'NO',
			'id_acceso' => '2'
         ]);        
        App\Sub_acceso::create([
        	'nombre_sub_acceso' =>'CREAR SUB-ROL',
			'ruta_sub_acceso' =>'sub_roles.create',
			'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE CREAR UN NUEVO SUB-ROL PARA EL SISTEMA.',
			'icono_sub_acceso' =>'fa fa-plus',
			'defecto_sub_acceso' =>'NO',
			'id_acceso' => '2'
         ]);        
        App\Sub_acceso::create([
        	'nombre_sub_acceso' =>'ASIGNAR ACCESOS USUARIO',
			'ruta_sub_acceso' =>'accesos.index',
			'descripcion_sub_acceso' =>'ESTA OPCIÓN PERITE CREAR BUSCAR A UN USUARIO SEGÚN PARÁMETROS Y VER LOS PERMISOS QUE TIENE, ADEMÁS DE MOSTRARLE OPCIONES ADICIONALES.',
			'icono_sub_acceso' =>'fa fa-vcard-o',
			'defecto_sub_acceso' =>'NO',
			'id_acceso' => '2'
         ]);        
        
    }
}
