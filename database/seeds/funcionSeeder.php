<?php 
 
use Illuminate\Database\Seeder;

class funcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Funcion::create([

            'nombre_funcion'=>'DOCENTE'
            
        ]);

        App\Funcion::create([

            'nombre_funcion'=>'JEFE DE TALLER'
            
        ]);

        App\Funcion::create([

            'nombre_funcion'=>'ADMINISTRADOR'
            
        ]);

        App\Funcion::create([

            'nombre_funcion'=>'DIRECTOR DE CARRERA'
            
        ]);

        App\Funcion::create([

            'nombre_funcion'=>'JEFE DE UNIDAD'
            
        ]);

        App\Funcion::create([

            'nombre_funcion'=>'COORDINADOR'
            
        ]);

        App\Funcion::create([

            'nombre_funcion'=>'JEFE DE DEPARTAMENTO'
            
        ]);
        App\Funcion::create([

            'nombre_funcion'=>'ESTUDIANTE'
            
        ]);


        App\Funcion::create([

            'nombre_funcion'=>'DECANO'
            
        ]); 


    }
}
