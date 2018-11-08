<?php

use Illuminate\Database\Seeder;

class planGestionUnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Plan_gestion_unidad::create([
			
        	'id_gestion'=>'3',
        	'id_plan'=>'1',
        	'id_unidad'=>'3',
        	'activo'=>'SI',
            'activo_plan'=>'SI'
        	
         ]);

        App\Plan_gestion_unidad::create([
			
        	'id_gestion'=>'3',
        	'id_plan'=>'2',
        	'id_unidad'=>'2',
        	'activo'=>'SI',
            'activo_plan'=>'SI'
        	
         ]);

        App\Plan_gestion_unidad::create([
			
        	'id_gestion'=>'3',
        	'id_plan'=>'3',
        	'id_unidad'=>'1',
        	'activo'=>'SI',
            'activo_plan'=>'SI'
        	
         ]);

        App\Plan_gestion_unidad::create([
			
        	'id_gestion'=>'3',
        	'id_plan'=>'4',
        	'id_unidad'=>'5',
        	'activo'=>'SI',
            'activo_plan'=>'SI'
        	
         ]);

        App\Plan_gestion_unidad::create([
			
        	'id_gestion'=>'3',
        	'id_plan'=>'5',
        	'id_unidad'=>'4',
        	'activo'=>'SI',
            'activo_plan'=>'SI'
        	
         ]);

// GESTION 2-2017

        App\Plan_gestion_unidad::create([
            
            'id_gestion'=>'1',
            'id_plan'=>'1',
            'id_unidad'=>'3',
            'activo'=>'SI',
            'activo_plan'=>'NO'
            
         ]);

        App\Plan_gestion_unidad::create([
            
            'id_gestion'=>'1',
            'id_plan'=>'2',
            'id_unidad'=>'2',
            'activo'=>'SI',
            'activo_plan'=>'NO'
            
         ]);

        App\Plan_gestion_unidad::create([
            
            'id_gestion'=>'1',
            'id_plan'=>'3',
            'id_unidad'=>'1',
            'activo'=>'SI',
            'activo_plan'=>'NO'
            
         ]);

        App\Plan_gestion_unidad::create([
            
            'id_gestion'=>'1',
            'id_plan'=>'4',
            'id_unidad'=>'5',
            'activo'=>'SI',
            'activo_plan'=>'NO'
            
         ]);

        App\Plan_gestion_unidad::create([
            
            'id_gestion'=>'1',
            'id_plan'=>'5',
            'id_unidad'=>'4',
            'activo'=>'SI',
            'activo_plan'=>'NO'
            
         ]);
//GESTION 4-2017

        App\Plan_gestion_unidad::create([
            
            'id_gestion'=>'2',
            'id_plan'=>'1',
            'id_unidad'=>'3',
            'activo'=>'SI',
            'activo_plan'=>'NO'
            
         ]);

        App\Plan_gestion_unidad::create([
            
            'id_gestion'=>'2',
            'id_plan'=>'2',
            'id_unidad'=>'2',
            'activo'=>'SI',
            'activo_plan'=>'NO'
            
         ]);

        App\Plan_gestion_unidad::create([
            
            'id_gestion'=>'2',
            'id_plan'=>'3',
            'id_unidad'=>'1',
            'activo'=>'NO',
            'activo_plan'=>'NO'
            
         ]);

        App\Plan_gestion_unidad::create([
            
            'id_gestion'=>'2',
            'id_plan'=>'4',
            'id_unidad'=>'5',
            'activo'=>'SI',
            'activo_plan'=>'NO'
            
         ]);

        App\Plan_gestion_unidad::create([
            
            'id_gestion'=>'2',
            'id_plan'=>'5',
            'id_unidad'=>'4',
            'activo'=>'SI',
            'activo_plan'=>'NO'
            
         ]);




    }
}
