<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadosNacionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados_nacionals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('año_pnacional')->unsigned()->default(0);
            $table->integer('nalumnos_4to_pnacional')->unsigned()->default(0);
            $table->integer('len_4to_pnacional')->unsigned()->default(0);
            $table->integer('mat_4to_pnacional')->unsigned()->default(0);
            $table->integer('comp_4to_pnacional')->unsigned()->default(0);
            $table->integer('nalumnos_8vo_pnacional')->unsigned()->default(0);
            $table->integer('leng_8vo_pnacional')->unsigned()->default(0);
            $table->integer('mat_8vo_pnacional')->unsigned()->default(0);
            $table->integer('sociales_8vo_pnacional')->unsigned()->default(0);
            $table->integer('cnaturales_8vo_pnacional')->unsigned()->default(0);
            $table->integer('nalumnos_2dom_pnacional')->unsigned()->default(0);
            $table->integer('len_2dom_pnacional')->unsigned()->default(0);
            $table->integer('mat_2dom_pnacional')->unsigned()->default(0);
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
        Schema::drop('resultados_nacionals');
    }
}
