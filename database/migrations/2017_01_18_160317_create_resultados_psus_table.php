<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadosPsusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados_psus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('psu_lenguaje')->unsigned()->default(0);
            $table->integer('psu_matematica')->unsigned()->default(0);
            $table->integer('psu_historia')->unsigned()->default(0);
            $table->integer('psu_ciencia')->unsigned()->default(0);
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
        Schema::drop('resultados_psus');
    }
}
