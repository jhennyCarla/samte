<?php

use Illuminate\Database\Seeder;

class titulacionAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Titulacion_area::create([
			
			'codigo_area'=>'',
			'nombre_area'=>'ÁREA CONTABLE',
            'nombre_corto'=>'CON'
         ]);

        App\Titulacion_area::create([
			
			'codigo_area'=>'',
			'nombre_area'=>'ÁREA ECONÓMICA Y CUANTITATIVA',
            'nombre_corto'=>'ECO'
         ]);

        App\Titulacion_area::create([
			
			'codigo_area'=>'',
			'nombre_area'=>'ÁREA AUDITORÍA',
            'nombre_corto'=>'AUD'
         ]);

        App\Titulacion_area::create([
			
			'codigo_area'=>'',
			'nombre_area'=>'ÁREA ADMINISTRATIVA',
            'nombre_corto'=>'ADM'
         ]);

        App\Titulacion_area::create([
			
			'codigo_area'=>'',
			'nombre_area'=>'ÁREA GESTIÓN FINANCIERA Y PROYECTOS',
            'nombre_corto'=>'GES'
         ]);

        App\Titulacion_area::create([
			
			'codigo_area'=>'',
			'nombre_area'=>'ÁREA FINANZAS ESPECIFICAS',
            'nombre_corto'=>'FIN'
         ]);
        App\Titulacion_area::create([
            
            'codigo_area'=>'',
            'nombre_area'=>'ÁREA MICROECONOMÍA',
            'nombre_corto'=>'MIC'
         ]);
        App\Titulacion_area::create([
            
            'codigo_area'=>'',
            'nombre_area'=>'ÁREA POLITÍCA ECONÓMICA',
            'nombre_corto'=>'POL'
         ]);
        App\Titulacion_area::create([
            
            'codigo_area'=>'',
            'nombre_area'=>'ÁREA ESTADÍSTICAS',
            'nombre_corto'=>'EST'
         ]);

    }
}
