<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{

    protected $table = 'establecimientos';

    protected $fillable = ['nombre_es','codigo_rbd','codigo_rbd2','denominacion_es','entorno_es','gruposec_es','alumnosgse_es',
    'direccion_es','comuna_es','ciudad_es','region_es','ag_reg','codpostal_es','casilla_es','correo_es','carea_es',
    'fono1_es','fono2_es','fax_es','email1_es','email2_es','email3_es','email4_es','pweb_es','planes_es',
    'director_es','ndirector_es','rut_es','tipo1_es','tipo2_es',
    'representante_es','nlegal_es','rutlegal_es',
    'sostenedor_es','nsostenedor_es','rutsostenedor_es',
    'ccatolico_es','claico_es','confesion_es','fundacionfecha_es','ndrecreto_es','resolucion_es','dmineduc_es',
    'prebasic','generalbasic','especial','humanista_cientifica','tecprofesional','jinfantiles','otro','estado','estado_text'];


}
