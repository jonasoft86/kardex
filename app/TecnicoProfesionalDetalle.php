<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TecnicoProfesionalDetalle extends Model
{
    protected $table = 'tecnico_prefesional_detalles';
    protected $fillable = ['formulario_id','tecnico_profesional_id'];
}
