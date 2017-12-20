<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sep extends Model
{
    protected $table = 'seps';
    protected $fillable = ['inscrito_sep','clasificacion_sep','convenio_pie_sep','alumnos_prioritarios_sep','alumnos_vulnerables_sep'];


}
