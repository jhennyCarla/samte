<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccesoSubRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceso_sub_roles', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('id_sub_acceso')->default('0')->unsigned();
            $table->integer('id_sub_rol')->default('0')->unsigned();

            $table->foreign('id_sub_acceso')->references('id')->on('sub_accesos')->onDelete('cascade');
            $table->foreign('id_sub_rol')->references('id')->on('sub_roles')->onDelete('cascade');

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
        Schema::dropIfExists('acceso_sub_roles');
    }
}
