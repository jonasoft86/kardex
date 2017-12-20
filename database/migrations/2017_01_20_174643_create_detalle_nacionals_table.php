<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleNacionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_nacionals', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::table('detalle_nacionals', function($table){

             $table->integer('formulario_id')->unsigned()->default(0);
             $table->foreign('formulario_id')->references('id')->on('formularios')->onDelete('cascade');

             $table->integer('nacional_id')->unsigned()->default(0);
             $table->foreign('nacional_id')->references('id')->on('resultados_nacionals')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_nacionals');
    }
}
