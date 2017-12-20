<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ncursos_pre_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_pre_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_pre_al')->unsigned()->default(0);
            $table->integer('ncursos_primero_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_primero_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_primero_al')->unsigned()->default(0);
            $table->integer('ncursos_segundo_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_segundo_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_segundo_al')->unsigned()->default(0);
            $table->integer('ncursos_tercero_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_tercero_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_tercero_al')->unsigned()->default(0);
            $table->integer('ncursos_cuarto_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_cuarto_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_cuarto_al')->unsigned()->default(0);
            $table->integer('ncursos_quinto_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_quinto_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_quinto_al')->unsigned()->default(0);
            $table->integer('ncursos_sexto_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_sexto_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_sexto_al')->unsigned()->default(0);
            $table->integer('ncursos_septimo_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_septimo_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_septimo_al')->unsigned()->default(0);
            $table->integer('ncursos_octavo_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_octavo_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_octavo_al')->unsigned()->default(0);

            $table->integer('ncursos_primerome_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_primerome_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_primerome_al')->unsigned()->default(0);
            $table->integer('ncursos_segundome_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_segundome_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_segundome_al')->unsigned()->default(0);
            $table->integer('ncursos_tercerome_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_tercerome_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_tercerome_al')->unsigned()->default(0);
            $table->integer('ncursos_cuartome_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_cuartome_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_cuartome_al0')->unsigned()->default(0);

            $table->integer('nalumnos_cientihumanista_al')->unsigned()->default(0);
            $table->integer('nalumnos_tecprofesional_al')->unsigned()->default(0);
            $table->integer('nalumnos_polivarente_al')->unsigned()->default(0);
            $table->integer('nalumnos_emabarazadas_al')->unsigned()->default(0);
            
            $table->integer('nalumnos_hombre_salcuna_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_salcuna_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_nmedio_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_nmedio_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_nmediom_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_nmediom_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_trans1_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_trans1_al')->unsigned()->default(0);
            $table->integer('nalumnos_hombre_trans2_al')->unsigned()->default(0);
            $table->integer('nalumnos_mujer_trans2_al')->unsigned()->default(0);
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
        Schema::drop('alumnados');
    }
}
