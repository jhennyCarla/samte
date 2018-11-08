<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefensaAmbientes extends Migration
{
    public function up()
    {
        Schema::create('defensa_ambientes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_defensa')->nullable();
            $table->time('hora_inicio_defensa')->nullable();
            $table->time('hora_fin_defensa')->nullable();
            $table->integer('id_ambiente')->unsigned();
            $table->integer('id_defensa')->unsigned();

            $table->foreign('id_ambiente')->references('id')->on('ambientes')->onDelete('cascade');
            $table->foreign('id_defensa')->references('id')->on('defensas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('defensa_ambientes');
    }
}
