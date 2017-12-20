<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndPedagogicos extends Model
{
    protected $table = 'ind_pedagogicos';

    protected $fillable = ['promAlumnos_in','repAlumnos_in','desercionAlumnos_in'];


}
