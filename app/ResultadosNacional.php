<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadosNacional extends Model
{

    protected $table = 'resultados_nacionals';

    protected $fillable = ['id','año_pnacional','nalumnos_4to_pnacional','len_4to_pnacional','mat_4to_pnacional','comp_4to_pnacional',
    'nalumnos_8vo_pnacional','leng_8vo_pnacional','mat_8vo_pnacional','sociales_8vo_pnacional','cnaturales_8vo_pnacional',
    'nalumnos_2dom_pnacional','len_2dom_pnacional','mat_2dom_pnacional'];


}
