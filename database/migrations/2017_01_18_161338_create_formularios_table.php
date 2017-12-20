<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::table('formularios', function($table){
            $table->integer('usuario_id')->unsigned()->default(0);
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            //Establecimiento
            $table->integer('establecimiento_id')->unsigned()->default(0);
            $table->foreign('establecimiento_id')->references('id')->on('establecimientos')->onDelete('cascade');
            //Razon Social
            $table->integer('razon_id')->unsigned()->default(0);
            $table->foreign('razon_id')->references('id')->on('razons')->onDelete('cascade');
            //Financiamiento
            $table->integer('financiamiento_id')->unsigned()->default(0);
            $table->foreign('financiamiento_id')->references('id')->on('financiamientos')->onDelete('cascade');
            //Sep
            $table->integer('sep_id')->unsigned()->default(0);
            $table->foreign('sep_id')->references('id')->on('seps')->onDelete('cascade');
            //Alumnado
            $table->integer('alumnado_id')->unsigned()->default(0);
            $table->foreign('alumnado_id')->references('id')->on('alumnados')->onDelete('cascade');
            //Personal
            $table->integer('personal_id')->unsigned()->default(0);
            $table->foreign('personal_id')->references('id')->on('personals')->onDelete('cascade');
            //Resultados Nacional
            $table->integer('resultados_nacional_id')->unsigned()->default(0);
            $table->foreign('resultados_nacional_id')->references('id')->on('resultados_nacionals')->onDelete('cascade');
            //Resultados PSU
            $table->integer('resultados_psu_id')->unsigned()->default(0);
            $table->foreign('resultados_psu_id')->references('id')->on('resultados_psus')->onDelete('cascade');          
            //Indicadores Pedagogicos
            $table->integer('ind_pedagogico_id')->unsigned()->default(0);
            $table->foreign('ind_pedagogico_id')->references('id')->on('ind_pedagogicos')->onDelete('cascade');
            //Situaciones especiales
            $table->integer('si_especial_id')->unsigned()->default(0);
            $table->foreign('si_especial_id')->references('id')->on('si_especials')->onDelete('cascade');
            //Especialidad Tecnica Profesional
            $table->integer('esp_tec_profesional_id')->unsigned()->default(0);
            $table->foreign('esp_tec_profesional_id')->references('id')->on('esp_tec_profesionals')->onDelete('cascade');  
            //Contingencia
            $table->integer('contingencia_id')->unsigned()->default(0);
            $table->foreign('contingencia_id')->references('id')->on('contingencias')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('formularios');
    }
}
