<?php
 
use Illuminate\Database\Seeder;

class tipoEmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tipo_email::create([

        	'nombre_tipo_email' => 'PARTICULAR',
         ]);
         App\Tipo_email::create([

        	'nombre_tipo_email' => 'FACULTATIVO',
         ]);
          App\Tipo_email::create([

        	'nombre_tipo_email' => 'TRABAJO',
         ]);
           App\Tipo_email::create([

        	'nombre_tipo_email' => 'MESSENGER',
         ]);
    }
}
