<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tdocentes_hombre_pe')->unsigned()->default(0);
            $table->integer('tdocentes_mujer_pe')->unsigned()->default(0);
            $table->integer('asistentes_hombre_pe')->unsigned()->default(0);
            $table->integer('asistentes_mujer_pe')->unsigned()->default(0);
            $table->integer('prom1_pe')->unsigned()->default(0);
            $table->integer('prom2_pe')->unsigned()->default(0);
            $table->integer('prom3_pe')->unsigned()->default(0);
            $table->integer('formDoctores_pe')->unsigned()->default(0);
            $table->integer('formMagister_pe')->unsigned()->default(0);
            $table->integer('formLicenciado_pe')->unsigned()->default(0);
            $table->integer('formDtitulo_pe')->unsigned()->default(0);
            $table->integer('formDAuth_pe')->unsigned()->default(0);
            $table->integer('formOros_pe')->unsigned()->default(0);
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
        Schema::drop('personals');
    }
}
