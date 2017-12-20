<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = 'formularios';

    protected $fillable = ['usuario_id','establecimiento_id','razon_id',
        'financiamiento_id','sep_id','alumnado_id','personal_id',
        'resultados_nacional_id','resultados_psu_id','ind_pedagogico_id',
        'si_especial_id','esp_tec_profesional_id','contingencia_id'];

    /*
    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function establecimiento()
    {
        return $this->hasOne('App\Establecimiento');
    }

    public function razon()
    {
        return $this->hasOne('App\Razon');
    }

    public function financiamiento()
    {
        return $this->hasOne('App\Financiamiento');
    }

    public function sep()
    {
        return $this->hasOne('App\Sep');
    }

    public function alumnado()
    {
        return $this->hasOne('App\Alumnado');
    }

    public function personal()
    {
        return $this->hasOne('App\Personal');
    }

    public function resultadosNacional()
    {
        return $this->hasOne('App\ResultadosNacional');
    }

    public function resultadosPsu()
    {
        return $this->hasOne('App\ResultadosPsu');
    }

    public function indicadoresPedagogicos()
    {
        return $this->hasOne('App\IndPedagogicos');
    }

    public function situacionEspecial()
    {
        return $this->hasOne('App\SiEspecial');
    }

    public function espTecProfesional()
    {
        return $this->hasOne('App\EspTecProfesional');
    }

    public function contingencia()
    {
        return $this->hasOne('App\Contingencia');
    }
    */

}
