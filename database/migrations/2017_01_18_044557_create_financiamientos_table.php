<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanciamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financiamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('subvencionado_fin')->nullable();
            $table->integer('montoanual_fin')->unsigned()->default(0);
            $table->boolean('gratuidad_fin')->nullable();
            $table->boolean('gratuidadEscolar_fin')->nullable();
            //
            $table->boolean('fincompartido_fin')->nullable();
            $table->integer('ing_anual_fin')->unsigned()->default(0);
            $table->integer('nbecas_fin')->unsigned()->default(0);
            $table->integer('escolaridadm_fin')->unsigned()->default(0);
            $table->integer('nbecastotales_fin')->unsigned()->default(0);
            //
            $table->boolean('pagado_fin')->nullable();
            $table->integer('vmatriculasPagado_fin')->unsigned()->default(0);
            $table->integer('nbecasPagado_fin')->unsigned()->default(0);
            $table->integer('escolaridadPagado_fin')->unsigned()->default(0);
            $table->integer('nbecastotalesPagado_fin')->unsigned()->default(0);
            //
            $table->boolean('corporatizado_fin')->nullable();
            $table->integer('monto_corp_fin')->unsigned()->default(0);
            $table->integer('ingresoanual_corp_fin')->unsigned()->default(0);
            $table->integer('aportecalidad_corp_fin')->unsigned()->default(0);
            //
            $table->string('inscripcionSep_fin', 50)->nullable();
            $table->integer('alumnosub_fin')->unsigned()->default(0);
            $table->integer('alumnosvulnerables_fin')->unsigned()->default(0);

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
        Schema::drop('financiamientos');
    }
}
