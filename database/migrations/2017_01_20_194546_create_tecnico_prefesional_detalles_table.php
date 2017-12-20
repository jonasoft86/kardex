<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTecnicoPrefesionalDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnico_prefesional_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::table('tecnico_prefesional_detalles', function($table){

             $table->integer('formulario_id')->unsigned()->default(0);
             $table->foreign('formulario_id')->references('id')->on('formularios')->onDelete('cascade');

             $table->integer('tecnico_profesional_id')->unsigned()->default(0);
             $table->foreign('tecnico_profesional_id')->references('id')->on('esp_tec_profesionals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tecnico_prefesional_detalles');
    }
}
