<?php

use Illuminate\Database\Seeder; 

class tipoTelefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'PARTICULAR',
         ]);
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'MOVIL',
         ]);
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'TRABAJO',
         ]);
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'FAX TRABAJO',
         ]);
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'FAX PARTICULAR',
         ]);
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'MOVIL TRABAJO',
         ]);
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'INTERNO OFICINA',
         ]);
        App\Tipo_telefono::create([

        	'nombre_tipo_telefono' => 'OTRO',
         ]);
    }
}
