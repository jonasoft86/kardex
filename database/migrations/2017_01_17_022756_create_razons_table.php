<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRazonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('razons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_rs', 256);
            $table->string('tipo_rs', 256);
            $table->string('fineslucro_rs', 256);
            $table->integer('rut_rs')->unsigned()->default(0);
            $table->string('sucursal_rs', 256);
            $table->string('direccion_rs', 256);
            $table->string('comuna_rs', 256);
            $table->string('ciudad_rs', 256);
            $table->string('region_rs', 256);
            $table->integer('fono_rs')->unsigned()->default(0);
            $table->string('otic_rs', 256);
            $table->string('otro1_rs', 256);
            $table->string('otro2_rs', 256);
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
        Schema::drop('razons');
    }
}
