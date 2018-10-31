<?php

use Illuminate\Database\Seeder;

class subAccesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'CREAR USUARIO',
			'ruta_sub_acceso' =>'usuarios.create',
			'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE CREAR UN NUEVO USUARIO DENTRO DEL SISTEMA.',
			'icono_sub_acceso' =>'iconoCrearUsuario.gif',
			'defecto_sub_acceso' =>'NO',
			'id_acceso' => '1'
         ]);
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'BUSCAR USUARIO',
			'ruta_sub_acceso' =>'usuarios.index',
			'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE VISUALIZAR LA INFORMACIÓN DE UN USUARIO REGISTRADO EN EL SISTEMA SEGÚN REQUERIMIENTO.',
			'icono_sub_acceso' =>'iconoBuscarUsuario.png',
			'defecto_sub_acceso' =>'NO',
			'id_acceso' => '1'
         ]);        
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'CREAR ROL',
			'ruta_sub_acceso' =>'roles.create',
			'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE CREAR UN NUEVO ROL PARA EL SISTEMA.',
			'icono_sub_acceso' =>'iconoCrearRol.png',
			'defecto_sub_acceso' =>'NO',
			'id_acceso' => '2'
         ]);        
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'LISTAR ROL',
			'ruta_sub_acceso' =>'roles.index',
			'descripcion_sub_acceso' =>'ESTA OPCIÓN LE ERMITE EDITAR O ELIMINAR UN ROL SELECCIONADO.',
			'icono_sub_acceso' =>'iconoEditarRol.png',
			'defecto_sub_acceso' =>'NO',
			'id_acceso' => '2'
         ]);
        
        App\Sub_acceso::create([

        	'nombre_sub_acceso' =>'CREAR SUB-ROL',
			'ruta_sub_acceso' =>'sub_roles.create',
			'descripcion_sub_acceso' =>'ESTA OPCIÓN DE TRABAJO PERMITE CREAR UN NUEVO SUB-ROL PARA EL SISTEMA.',
			'icono_sub_acceso' =>'iconoCrearSubRol.png',
			'defecto_sub_acceso' =>'NO',
			'id_acceso' => '2'
         ]);        
        App\Sub_acceso::create([
        	'nombre_sub_acceso' =>'LISTAR SUB-ROL',
			'ruta_sub_acceso' =>'sub_roles.index',
			'descripcion_sub_acceso' =>'ESTA OPCIÓN LE PERMITE EDITAR UN SUB-ROL SELECCIONADO. ',
			'icono_sub_acceso' =>'iconoEditarSubRol.png',
			'defecto_sub_acceso' =>'NO',
			'id_acceso' => '2'
         ]);        
        App\Sub_acceso::create([
        	'nombre_sub_acceso' =>'ASIGNAR ACCESOS USUARIO',
			'ruta_sub_acceso' =>'accesos.index',
			'descripcion_sub_acceso' =>'ESTA OPCIÓN PERITE CREAR BUSCAR A UN USUARIO SEGÚN PARÁMETROS Y VER LOS PERMISOS QUE TIENE, ADEMÁS DE MOSTRARLE OPCIONES ADICIONALES.',
			'icono_sub_acceso' =>'iconoEditarRol.png',
			'defecto_sub_acceso' =>'NO',
			'id_acceso' => '2'
         ]);        
        
    }
}
