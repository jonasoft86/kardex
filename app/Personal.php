<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personals';

    protected $fillable = ['tdocentes_hombre_pe','tdocentes_mujer_pe','asistentes_hombre_pe','asistentes_mujer_pe',
    'prom1_pe','prom2_pe','prom3_pe',
    'formDoctores_pe','formMagister_pe','formLicenciado_pe',
    'formDtitulo_pe','formDAuth_pe','formOros_pe'];


}
