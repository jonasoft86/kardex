<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiEspecialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('si_especials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proyectos_sitE', 50)->nullable();
            $table->string('alumnos_sitE', 50)->nullable();
            $table->string('caracteristica_sitE', 150)->nullable();
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
        Schema::drop('si_especials');
    }
}
