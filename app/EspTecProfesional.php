<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EspTecProfesional extends Model
{

    protected $table = 'esp_tec_profesionals';

    protected $fillable = ['nombre_espTec','acreditada_espTec','vigencia_inicio_espTec',
    'vigencia_fin_espTec','ntitulados_espTec','nempresas_espTec',
    'consejoem_espTec','observacion_espTec'];


}
