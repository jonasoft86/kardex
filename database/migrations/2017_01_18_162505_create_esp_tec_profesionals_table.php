<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspTecProfesionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esp_tec_profesionals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_espTec', 50)->nullable();
            $table->string('acreditada_espTec')->nullable();
            $table->integer('vigencia_inicio_espTec')->unsigned()->default(0);
            $table->integer('vigencia_fin_espTec')->unsigned()->default(0);
            $table->integer('ntitulados_espTec')->unsigned()->default(0);
            $table->integer('nempresas_espTec')->unsigned()->default(0);
            $table->string('consejoem_espTec', 50)->nullable();
            $table->string('observacion_espTec', 500)->nullable();
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
        Schema::drop('esp_tec_profesionals');
    }
}
