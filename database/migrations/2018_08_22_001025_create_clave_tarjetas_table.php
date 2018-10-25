<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaveTarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('clave_tarjetas', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('activo_notas',['SI','NO'])->default('NO');
            $table->string('A1',200);
            $table->string('A2',200);
            $table->string('A3',200);
            $table->string('A4',200);
            $table->string('A5',200);
            $table->string('B1',200);
            $table->string('B2',200);
            $table->string('B3',200);
            $table->string('B4',200);
            $table->string('B5',200);
            $table->string('C1',200);
            $table->string('C2',200);
            $table->string('C3',200);
            $table->string('C4',200);
            $table->string('C5',200);
            $table->string('D1',200);
            $table->string('D2',200);
            $table->string('D3',200);
            $table->string('D4',200);
            $table->string('D5',200);
            $table->string('E1',200);
            $table->string('E2',200);
            $table->string('E3',200);
            $table->string('E4',200);
            $table->string('E5',200);
            $table->string('F1',200);
            $table->string('F2',200);
            $table->string('F3',200);
            $table->string('F4',200);
            $table->string('F5',200);
            $table->string('G1',200);
            $table->string('G2',200);
            $table->string('G3',200);
            $table->string('G4',200);
            $table->string('G5',200);
            $table->string('H1',200);
            $table->string('H2',200);
            $table->string('H3',200);
            $table->string('H4',200);
            $table->string('H5',200);
            $table->string('I1',200);
            $table->string('I2',200);
            $table->string('I3',200);
            $table->string('I4',200);
            $table->string('I5',200);
            $table->string('J1',200);
            $table->string('J2',200);
            $table->string('J3',200);
            $table->string('J4',200);
            $table->string('J5',200);

            $table->integer('id_usuario')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clave_tarjetas');
    }
}
