<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_es', 50)->nullable();
            $table->integer('codigo_rbd')->unsigned()->default(0);
            $table->string('denominacion_es', 50)->nullable();
            $table->string('entorno_es', 50)->nullable();
            $table->string('gruposec_es', 50)->nullable();
            $table->string('alumnosgse_es', 50)->nullable();
            $table->string('direccion_es', 50)->nullable();
            $table->string('comuna_es')->nullable();
            $table->string('ciudad_es', 50)->nullable();
            $table->string('region_es', 50)->nullable();
            $table->integer('codpostal_es')->unsigned()->default(0);
            $table->string('casilla_es', 50)->nullable();
            $table->string('correo_es', 50)->nullable();
            $table->integer('carea_es')->unsigned()->default(0);
            $table->integer('fono1_es')->unsigned()->default(0);
            $table->integer('fono2_es')->unsigned()->default(0);
            $table->integer('fax_es')->unsigned()->default(0);
            $table->string('email1_es', 50)->nullable();
            $table->string('email2_es', 50)->nullable();
            $table->string('email3_es', 50)->nullable();
            $table->string('pweb_es', 50)->nullable();
            $table->string('planes_es', 50)->nullable();
            $table->string('director_es', 50)->nullable();
            $table->string('ndirector_es', 50)->nullable();
            $table->integer('rut_es')->unsigned()->default(0);
            $table->string('tipo1_es', 50)->nullable();
            $table->string('tipo2_es', 50)->nullable();
            $table->string('representante_es', 50);
            $table->string('nlegal_es', 50)->nullable();
            $table->integer('rutlegal_es')->unsigned()->default(0);
            $table->string('sostenedor_es', 50)->nullable();
            $table->string('nsostenedor_es', 50)->nullable();
            $table->integer('rutsostenedor_es')->unsigned()->default(0);
            $table->string('ccatolico_es', 50)->nullable();
            $table->string('claico_es', 50)->nullable();
            $table->string('confesion_es', 50)->nullable();
            $table->date('fundacionfecha_es');
            $table->integer('ndrecreto_es')->unsigned()->default(0);
            $table->string('dmineduc_es', 50)->nullable();

            $table->boolean('prebasic');
            $table->boolean('generalbasic');
            $table->boolean('especial');
            $table->boolean('humanista_cientifica');
            $table->boolean('tecprofesional');
            $table->boolean('jinfantiles');
            $table->boolean('otro');
            $table->string('estado')->nullable();
        
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
        Schema::drop('establecimientos');
    }
}
