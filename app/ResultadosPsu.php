<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadosPsu extends Model
{
    protected $table = 'resultados_psus';
    protected $fillable = ['año_psu','psu_lenguaje','psu_matematica','psu_historia','psu_ciencia'];


}
