<?php

use Illuminate\Database\Seeder;

class paisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Pais::create([

        	'nombre_pais' => 'BOLIVIA',
        	

         ]);
        App\Pais::create([

            'nombre_pais' => 'EXTRANJERO',
            

         ]);
        
    }
}
