<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnado extends Model
{
    protected $table = 'alumnados';

    protected $fillable = ['ncursos_pre_al','nalumnos_hombre_pre_al','nalumnos_mujer_pre_al',
    'ncursos_primero_al','nalumnos_hombre_primero_al','nalumnos_mujer_primero_al',
    'ncursos_segundo_al','nalumnos_hombre_segundo_al','nalumnos_mujer_segundo_al',
    'ncursos_tercero_al','nalumnos_hombre_tercero_al','nalumnos_mujer_tercero_al',
    'ncursos_cuarto_al','nalumnos_hombre_cuarto_al','nalumnos_mujer_cuarto_al',
    'ncursos_quinto_al','nalumnos_hombre_quinto_al','nalumnos_mujer_quinto_al',
    'ncursos_sexto_al','nalumnos_hombre_sexto_al','nalumnos_mujer_sexto_al',
    'ncursos_septimo_al','nalumnos_hombre_septimo_al','nalumnos_mujer_septimo_al',
    'ncursos_octavo_al','nalumnos_hombre_octavo_al','nalumnos_mujer_octavo_al',
    'ncursos_primerome_al','nalumnos_hombre_primerome_al','nalumnos_mujer_primerome_al',
    'ncursos_segundome_al','nalumnos_hombre_segundome_al','nalumnos_mujer_segundome_al',
    'ncursos_tercerome_al','nalumnos_hombre_tercerome_al','nalumnos_mujer_tercerome_al',
    'ncursos_cuartome_al','nalumnos_hombre_cuartome_al','nalumnos_mujer_cuartome_al',
    'nalumnos_cientihumanista_al','nalumnos_tecprofesional_al','nalumnos_polivarente_al','nalumnos_emabarazadas_al',
    'nalumnos_hombre_salcuna_al','nalumnos_mujer_salcuna_al','nalumnos_hombre_nmedio_al','nalumnos_mujer_nmedio_al',
    'nalumnos_hombre_nmediom_al','nalumnos_mujer_nmediom_al','nalumnos_hombre_trans1_al','nalumnos_mujer_trans1_al',
    'nalumnos_hombre_trans2_al','nalumnos_mujer_trans2_al'];


}
