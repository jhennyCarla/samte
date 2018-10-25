<?php

use Illuminate\Database\Seeder;

class ciudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       App\Ciudad::create([

            'nombre_ciudad' => 'COCHABAMBA',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'SANTA CRUZ',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'LA PAZ',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'ORURO',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'POTOSI',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'TARIJA',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'PANDO',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'BENI',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'CHUQUISACA',
            'id_pais' => '1'

         ]);
       App\Ciudad::create([

            'nombre_ciudad' => 'EXTRANJERO',
            'id_pais' => '2'

         ]);
    }
}
