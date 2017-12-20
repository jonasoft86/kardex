<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financiamiento extends Model
{
    protected $table = 'financiamientos';

    protected $fillable = ['subvencionado_fin','montoanual_fin','gratuidad_fin','gratuidadEscolar_fin',
                            'fincompartido_fin','ing_anual_fin','nbecas_fin','escolaridadm_fin','nbecastotales_fin',
                            'pagado_fin','vmatriculasPagado_fin','nbecasPagado_fin','escolaridadPagado_fin','nbecastotalesPagado_fin',
                            'corporatizado_fin','monto_corp_fin','ingresoanual_corp_fin','aportecalidad_corp_fin',
                            'inscripcionSep_fin','alumnosub_fin','alumnosvulnerables_fin'];


}
