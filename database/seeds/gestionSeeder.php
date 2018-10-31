<?php
  
use Illuminate\Database\Seeder;

class gestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        App\Gestion::create([
			
			'anio'=>'2010', 
			'periodo'=>'1', 
			'fecha_inicio'=>'2010-03-02', 
			'fecha_fin'=>'2010-06-22', 
			'activo'=>'NO',  
			'id_tipo_gestion'=>'1'
        	
         ]);

        App\Gestion::create([
			
			'anio'=>'2010', 
			'periodo'=>'2', 
			'fecha_inicio'=>'2010-08-03', 
			'fecha_fin'=>'2010-12-22', 
			'activo'=>'NO', 
			'id_tipo_gestion'=>'2'
        	
         ]);

        App\Gestion::create([
			
			'anio'=>'2011', 
			'periodo'=>'1', 
			'fecha_inicio'=>'2011-03-02', 
			'fecha_fin'=>'2011-06-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'1'
        	
         ]);

        App\Gestion::create([
			
			'anio'=>'2011', 
			'periodo'=>'2', 
			'fecha_inicio'=>'2011-08-03', 
			'fecha_fin'=>'2011-12-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'2'
        	
         ]);
        App\Gestion::create([
			
			'anio'=>'2012', 
			'periodo'=>'1', 
			'fecha_inicio'=>'2012-03-02', 
			'fecha_fin'=>'2012-06-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'1'
        	
         ]);
        App\Gestion::create([
			
			'anio'=>'2012', 
			'periodo'=>'2', 
			'fecha_inicio'=>'2012-08-03', 
			'fecha_fin'=>'2012-12-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'2'
        	
         ]);
        App\Gestion::create([
			
			'anio'=>'2013', 
			'periodo'=>'1', 
			'fecha_inicio'=>'2013-03-02', 
			'fecha_fin'=>'2013-06-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'1'
        	
         ]);
        App\Gestion::create([
			
			'anio'=>'2013', 
			'periodo'=>'2', 
			'fecha_inicio'=>'2013-08-03', 
			'fecha_fin'=>'2013-12-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'2'
        	
         ]);
        App\Gestion::create([
			
			'anio'=>'2014', 
			'periodo'=>'1', 
			'fecha_inicio'=>'2014-03-02', 
			'fecha_fin'=>'2014-06-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'1'
        	
         ]);
        App\Gestion::create([
			
			'anio'=>'2014', 
			'periodo'=>'2', 
			'fecha_inicio'=>'2014-08-03', 
			'fecha_fin'=>'2014-12-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'2'
        	
         ]);
        App\Gestion::create([
			
			'anio'=>'2015', 
			'periodo'=>'1', 
			'fecha_inicio'=>'2015-03-02', 
			'fecha_fin'=>'2015-06-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'1'
        	
         ]);

        App\Gestion::create([
			
			'anio'=>'2015', 
			'periodo'=>'2', 
			'fecha_inicio'=>'2015-08-03', 
			'fecha_fin'=>'2015-12-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'2'
        	
         ]);

        App\Gestion::create([
			
			'anio'=>'2016', 
			'periodo'=>'1', 
			'fecha_inicio'=>'2016-03-02', 
			'fecha_fin'=>'2016-06-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'1'
        	
         ]);

        App\Gestion::create([
			
			'anio'=>'2016', 
			'periodo'=>'2', 
			'fecha_inicio'=>'2016-08-03', 
			'fecha_fin'=>'2016-12-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'2'
        	
         ]);

        App\Gestion::create([
			
			'anio'=>'2017', 
			'periodo'=>'1', 
			'fecha_inicio'=>'2017-03-02', 
			'fecha_fin'=>'2017-06-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'1'
        	
         ]);

        App\Gestion::create([
			
			'anio'=>'2017', 
			'periodo'=>'2', 
			'fecha_inicio'=>'2017-08-03', 
			'fecha_fin'=>'2017-12-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'2'
        	
         ]);

        App\Gestion::create([
			
			'anio'=>'2018', 
			'periodo'=>'1', 
			'fecha_inicio'=>'2018-03-02', 
			'fecha_fin'=>'2018-06-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'1'
        	
         ]);

        App\Gestion::create([
			
			'anio'=>'2018', 
			'periodo'=>'2', 
			'fecha_inicio'=>'2018-08-03', 
			'fecha_fin'=>'2018-12-22', 
			'activo'=>'SI',  
			'id_tipo_gestion'=>'2'
        	
         ]);
    }
}
