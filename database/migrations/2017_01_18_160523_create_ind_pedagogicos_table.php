<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndPedagogicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ind_pedagogicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('promAlumnos_in')->unsigned()->default(0);
            $table->integer('repAlumnos_in')->unsigned()->default(0);
            $table->integer('desercionAlumnos_in')->unsigned()->default(0);
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
        Schema::drop('ind_pedagogicos');
    }
}
