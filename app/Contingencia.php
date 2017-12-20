<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contingencia extends Model
{

    protected $table = 'contingencias';

    protected $fillable = ['inspeccion_trabajo_con','fineslucro_rs','denuncias_sernac_con','observaciones_con','denuncias_junji_con'];


}
