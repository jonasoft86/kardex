<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePsusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('detalle_psus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::table('detalle_psus', function($table){

             $table->integer('formulario_id')->unsigned()->default(0);
             $table->foreign('formulario_id')->references('id')->on('formularios')->onDelete('cascade');

             $table->integer('psu_id')->unsigned()->default(0);
             $table->foreign('psu_id')->references('id')->on('resultados_psus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_psus');
    }
}
