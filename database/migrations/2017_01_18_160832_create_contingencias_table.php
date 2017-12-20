<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContingenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contingencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('inspeccion_trabajo_con', 50)->nullable();
            $table->string('fineslucro_rs', 50)->nullable();
            $table->string('denuncias_sernac_con', 50)->nullable();
            $table->string('observaciones_con', 50)->nullable();
            $table->string('denuncias_junji_con', 50)->nullable();
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
        Schema::drop('contingencias');
    }
}
