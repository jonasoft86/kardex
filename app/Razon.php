<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Razon extends Model
{
    protected $table = 'razons';

    protected $fillable = ['nombre_rs','tipo_rs','fineslucro_rs','rut_rs','sucursal_rs','direccion_rs',
    'comuna_rs','ciudad_rs','region_rs','fono_rs','otic_rs','otro1_rs','otro2_rs']; 


}
