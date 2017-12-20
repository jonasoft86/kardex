<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('inscrito_sep', 50)->nullable();
            $table->string('clasificacion_sep', 50)->nullable();
            $table->string('convenio_pie_sep', 50)->nullable();
            $table->integer('alumnos_prioritarios_sep')->unsigned()->default(0);
            $table->integer('alumnos_vulnerables_sep')->unsigned()->default(0);
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
        Schema::drop('seps');
    }
}
