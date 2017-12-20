<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiEspecial extends Model
{
    protected $table = 'si_especials';
    protected $fillable = ['proyectos_sitE','alumnos_sitE','caracteristica_sitE'];


}
