<?php 
 
use Illuminate\Database\Seeder;

class usuarioSeeder extends Seeder
{
    public function run() 
    {
    	App\Usuario::create([ 
 
			// admin
			'doc_identidad' => '5188579',
			'login' => 'admin',
			'clave' => bcrypt('admin'), 
			'apellidos' => 'MIRANDA ROMERO',
			'nombres' => 'WEYMAR',
			'sexo' => 'MASCULINO',
			'fecha_nac' => '1980-02-14',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '1',
			'id_provincia' =>'2',
			'ciudad_expedido_doc' => '1',
			'id_tipo_doc_identidad' => '1'

         ]);

    	App\Usuario::create([
    		// admin
			'doc_identidad' => '7951988',
			'login' => 'tati',
			'clave' => bcrypt('tati'),
			'apellidos' => 'JALDIN GRANADOS',
			'nombres' => 'TATIANA',
			'sexo' => 'FEMENINO',
			'fecha_nac' => '1993-01-02',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '2',
			'id_provincia' =>'15',
			'ciudad_expedido_doc' => '6',
			'id_tipo_doc_identidad' => '1'

         ]);

    	App\Usuario::create([
    		// admin
			'doc_identidad' => '5159972',
			'login' => 'liz',
			'clave' => bcrypt('liz'),
			'apellidos' => 'CONDORI CASTRO',
			'nombres' => 'LIZ',
			'sexo' => 'FEMENINO',
			'fecha_nac' => '1990-09-13',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '3',
			'id_provincia' =>'20',
			'ciudad_expedido_doc' => '4',
			'id_tipo_doc_identidad' => '1'

         ]);

    	App\Usuario::create([
        	// decano
			'doc_identidad' => '952772',
			'login' => 'elmer',
			'clave' => bcrypt('elmer'),
			'apellidos' => 'PEREZ AMADOR',
			'nombres' => 'ELMER',
			'sexo' => 'MASCULINO',
			'fecha_nac' => '1959-01-29',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '2',
			'id_provincia' =>'39',
			'ciudad_expedido_doc' => '2',
			'id_tipo_doc_identidad' => '1'

         ]);

    	App\Usuario::create([
        	// director academico
			'doc_identidad' => '1279630',
			'login' => 'hermogenes',
			'clave' => bcrypt('hermogenes'),
			'apellidos' => 'CONDORI ARIAS',
			'nombres' => 'HERMOGENES',
			'sexo' => 'MASCULINO',
			'fecha_nac' => '1980-02-12',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '2',
			'id_provincia' =>'46',
			'ciudad_expedido_doc' => '2',
			'id_tipo_doc_identidad' => '1'

         ]);
        
    	App\Usuario::create([
    		// jefe de taller conta
			'doc_identidad' => '3526566',
			'login' => 'henry',
			'clave' => bcrypt('henry'),
			'apellidos' => 'OROSCO LLAVE',
			'nombres' => 'HENRY',
			'sexo' => 'MASCULINO',
			'fecha_nac' => '1976-10-25',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '1',
			'id_provincia' =>'30',
			'ciudad_expedido_doc' => '9',
			'id_tipo_doc_identidad' => '1'

         ]);

         App\Usuario::create([
         	//secretaria taller conta
			'doc_identidad' => '7777888',
			'login' => 'susana',
			'clave' => bcrypt('susana'),
			'apellidos' => 'GARCIA',
			'nombres' => 'SUSANA',
			'sexo' => 'FEMENINO',
			'fecha_nac' => '1980-01-02',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '2',
			'id_provincia' =>'35',
			'ciudad_expedido_doc' => '5',
			'id_tipo_doc_identidad' => '1'

         ]);

         App\Usuario::create([
         	//secretaria taller admin
			'doc_identidad' => '7777666',
			'login' => 'mery',
			'clave' => bcrypt('mery'),
			'apellidos' => 'ROCHA',
			'nombres' => 'MERY',
			'sexo' => 'FEMENINO',
			'fecha_nac' => '1993-01-02',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '3',
			'id_provincia' =>'40',
			'ciudad_expedido_doc' => '4',
			'id_tipo_doc_identidad' => '1'

         ]);

         App\Usuario::create([
			//jefe de taller eco
			'doc_identidad' => '6822907',
			'login' => 'rene',
			'clave' => bcrypt('rene'),
			'apellidos' => 'QUISPE CABRERA',
			'nombres' => 'RENE',
			'sexo' => 'MASCULINO',
			'fecha_nac' => '1980-05-12',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '2',
			'id_provincia' =>'39',
			'ciudad_expedido_doc' => '2',
			'id_tipo_doc_identidad' => '1'

         ]);

        App\Usuario::create([
        	// Docente 1
			'doc_identidad' => '3728642',
			'login' => 'alvaro',
			'clave' => bcrypt('alvaro'),
			'apellidos' => 'ROCABADO SUAREZ',
			'nombres' => 'ALVARO FERNANDO',
			'sexo' => 'MASCULINO',
			'fecha_nac' => '1970-05-30',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '2',
			'id_provincia' =>'39',
			'ciudad_expedido_doc' => '2',
			'id_tipo_doc_identidad' => '1'

         ]);
        
        App\Usuario::create([
        	// docente 2
			'doc_identidad' => '3068828',
			'login' => 'walter',
			'clave' => bcrypt('walter'),
			'apellidos' => 'ORELLANA ARAOZ',
			'nombres' => 'WALTER',
			'sexo' => 'MASCULINO',
			'fecha_nac' => '1980-03-30',
			'usuario_activo' => 'SI',
			'inscribir_adm' => 'SI',
			'estilo' => 'General',
			'subir_foto' => 'SI',
			'id_estado_civil' => '2',
			'id_provincia' =>'39',
			'ciudad_expedido_doc' => '2',
			'id_tipo_doc_identidad' => '1'

         ]);
        
    }
}
