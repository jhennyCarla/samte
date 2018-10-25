<?php

use Illuminate\Database\Seeder;

class modalidadTitulacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'PROYECTO DE GRADO',
            'abreviacion_modalidad'=>'PG',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'ADSCRIPCION',
            'abreviacion_modalidad'=>'AD',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'TRABAJO DIRIGIDO',
            'abreviacion_modalidad'=>'TD',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'TRABAJO DE INTERNADO',
            'abreviacion_modalidad'=>'TI',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'EXCELENCIA ACADEMICA',
            'abreviacion_modalidad'=>'EA',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'RENDIMIENTO ACADEMICO',
            'abreviacion_modalidad'=>'RA',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'TESIS',
            'abreviacion_modalidad'=>'TE',
			'descripcion_modalidad'=>''
        ]);

        App\Modalidad_titulacion::create([

        	'nombre_modalidad'=>'PTAANG',
            'abreviacion_modalidad'=>'PT',
			'descripcion_modalidad'=>''
        ]);
    }
}
