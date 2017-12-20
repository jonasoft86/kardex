<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleNacional extends Model
{
    protected $table = 'detalle_nacionals';
    protected $fillable = ['formulario_id','nacional_id'];
}
