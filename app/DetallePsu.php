<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallePsu extends Model
{
    protected $table = 'detalle_psus';
    protected $fillable = ['formulario_id','psu_id'];
}
