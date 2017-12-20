<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

use App\Formulario;
use App\Establecimiento;
use App\Razon;
use App\Financiamiento;
use App\Sep;
use App\Alumnado;
use App\Personal;
use App\ResultadosNacional;
use App\ResultadosPsu;
use App\IndPedagogicos;
use App\SiEspecial;
use App\EspTecProfesional;
use App\Contingencia;
use App\DetallePsu;
use App\DetalleNacional;
use App\TecnicoProfesionalDetalle;

use Auth;
use Redirect;
use Session;
use DB;

class FormularioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //dd($request);
        $readonly = false;

        if($request->session()->has('formulario')){
            $formularioActual = session('formulario');
        }
        else
        {
            $formularioActual = Formulario::all()->last();
        }

    
        $registroFormulario = Formulario::find($formularioActual->id);

       
        //dd($resultadosPsu);

        $establecimiento = Establecimiento::find($registroFormulario->establecimiento_id);
        $razon = Razon::find($registroFormulario->razon_id);
        $financiamiento = Financiamiento::find($registroFormulario->financiamiento_id);
        $sep = Sep::find($registroFormulario->sep_id);
        $alumnado = Alumnado::find($registroFormulario->alumnado_id);
        $personal = Personal::find($registroFormulario->personal_id);
        $indPedagogicos = IndPedagogicos::find($registroFormulario->ind_pedagogico_id);
        $siEspecial = SiEspecial::find($registroFormulario->si_especial_id);
        //$espTecProfesional = EspTecProfesional::find($registroFormulario->esp_tec_profesional_id);
        $contingencia = Contingencia::find($registroFormulario->contingencia_id);

        //Resultados PSU
        $resultadosPsu = DB::table('detalle_psus')->where('formulario_id', $registroFormulario->id)->get();

        $psu = null;
        for ($i = 0; $i < count($resultadosPsu); $i++){
            $psu[$i] = ResultadosPsu::find($resultadosPsu[$i]->psu_id);
        }

        //Resultados Prueba Nacional
        $resultadosNacional = DB::table('detalle_nacionals')->where('formulario_id', $registroFormulario->id)->get();

        $nacional = null;
        for ($i = 0; $i < count($resultadosNacional); $i++){
            $nacional[$i] = ResultadosNacional::find($resultadosNacional[$i]->nacional_id);
        }

        //Resultados Tecnico Profesional
        $resultadosTecProfesional = DB::table('tecnico_prefesional_detalles')->where('formulario_id', $registroFormulario->id)->get();

        $tecnico = null;
        for ($i = 0; $i < count($resultadosTecProfesional); $i++){
            $tecnico[$i] = EspTecProfesional::find($resultadosTecProfesional[$i]->tecnico_profesional_id);
        }

        //dd($resultadosTecProfesional);
        //dd($tecnico);

        return view('formularios.index',[
            "establecimiento" => $establecimiento,
            "razon" => $razon,
            "financiamiento" => $financiamiento,
            "sep" => $sep,
            "alumnado" => $alumnado,
            "personal" => $personal,
            "resultadosPsu" => $resultadosPsu,
            "psu" => $psu,
            "resultadosNacional" => $resultadosNacional,
            "nacional" => $nacional,
            "indPedagogicos" => $indPedagogicos,
            "siEspecial" => $siEspecial,
            "resultadosTecProfesional" => $resultadosTecProfesional,
            "tecnico" => $tecnico,
            "contingencia" => $contingencia,
            "readonly" => $readonly,
            "registroFormulario" => $registroFormulario,
        ]);
        
    }

    //Estado value
    public function setEstado(Request $request)
    {
        $estado = $request->input('estadoCheck');


        if($estado=='1'){
            $estado = 'No Afiliado';
        }
        if($estado=='2'){
            $estado = $request->input('estado1Text');
        }
        if($estado=='3'){
            $estado = $request->input('estado2Text');
        }
        if($estado=='4'){
            $estado = $request->input('estado3Text');
        }
        return $estado; 
    }

    //satore and index refresh
    public function store(Request $request)
    {
       // dd($request);
        $readonly = false;
        $id = $request->input('id_form');
        $registroFormulario = Formulario::find($id);

        //$resultadosPsu = DB::table('detalle_psus')->where('formulario_id', $registroFormulario->id)->get();
        //dd($resultadosPsu);

        $establecimiento = Establecimiento::find($registroFormulario->establecimiento_id);
        $razon = Razon::find($registroFormulario->razon_id);
        $financiamiento = Financiamiento::find($registroFormulario->financiamiento_id);
        $sep = Sep::find($registroFormulario->sep_id);
        $alumnado = Alumnado::find($registroFormulario->alumnado_id);
        $personal = Personal::find($registroFormulario->personal_id);
        //$resultadosNacional = ResultadosNacional::find($registroFormulario->resultados_nacional_id);
        //$resultadosPsu_db = ResultadosPsu::find($registroFormulario->resultados_psu_id);
        $indPedagogicos = IndPedagogicos::find($registroFormulario->ind_pedagogico_id);
        $siEspecial = SiEspecial::find($registroFormulario->si_especial_id);
        $espTecProfesional = EspTecProfesional::find($registroFormulario->esp_tec_profesional_id);
        $contingencia = Contingencia::find($registroFormulario->contingencia_id);

        //Resultados PSU
        $resultadosPsu = DB::table('detalle_psus')->where('formulario_id', $registroFormulario->id)->get();

        $psu = null;
        for ($i = 0; $i < count($resultadosPsu); $i++){
            $psu[$i] = ResultadosPsu::find($resultadosPsu[$i]->id);
        }

        //Resultados Prueba Nacional
        $resultadosNacional = DB::table('detalle_nacionals')->where('formulario_id', $registroFormulario->id)->get();

        $nacional = null;
        for ($i = 0; $i < count($resultadosNacional); $i++){
            $nacional[$i] = ResultadosNacional::find($resultadosNacional[$i]->id);
        }

        //Resultados Tecnico Profesional
        $resultadosTecProfesional = DB::table('tecnico_prefesional_detalles')->where('formulario_id', $registroFormulario->id)->get();

        $tecnico = null;
        for ($i = 0; $i < count($resultadosTecProfesional); $i++){
            $tecnico[$i] = EspTecProfesional::find($resultadosTecProfesional[$i]->tecnico_profesional_id);
        }
        

        $update = $request->input('update');

       // dd($request);
        switch($update)
        {
            case 'establecimiento':
                $this->updateEstablecimiento($establecimiento,$request);
            break;

            case 'razon':
                 $this->updateRazon($razon,$request);
            break;

            case 'financiamiento':
                 $this->updateFinanciamiento($financiamiento,$request);
            break;

            case 'sep':
                 $this->updateSep($sep,$request);
            break;

            case 'alumnado':
                 $this->updateAlumnado($alumnado,$request);
            break;

            case 'personal':
                 $this->updatePersonal($personal,$request);
            break;

            case 'resultados_nacional':
                 $this->updateResultadosNacional($request,$formularioActual->id);
            break;

            case 'resultados_psu':
                 $this->updateResultadosPsu($request,$formularioActual->id);
            break;

            case 'ind_pedagogico':
                 $this->updateIndPedagogicos($indPedagogicos,$request);
            break;

            case 'si_especial':
                 $this->updateSiEspecial($siEspecial,$request);
            break;

            case 'tecnico_profesional':
                 $this->updateTecnicoProfesional($request,$formularioActual->id);
            break;

            case 'contingencia':
                 $this->updateContingencia($contingencia,$request);
            break;
        }
       
        return redirect()->intended('formulario')->with('formulario' , $registroFormulario);
    }

    public function updateEstablecimiento(Establecimiento $establecimiento,Request $request)
    {
        $establecimiento->nombre_es = $request->input('nombre_es');
        $establecimiento->codigo_rbd = $request->input('codigo_rbd');
        $establecimiento->codigo_rbd2 = $request->input('codigo_rbd2');
        $establecimiento->denominacion_es = $request->input('denominacion_es');
        $establecimiento->entorno_es = $request->input('entorno_es');
        $establecimiento->gruposec_es = $request->input('gruposec_es');
        $establecimiento->alumnosgse_es = $request->input('alumnosgse_es');
        $establecimiento->direccion_es = $request->input('direccion_es');
        $establecimiento->comuna_es = $request->input('comuna_es');
        $establecimiento->ciudad_es = $request->input('ciudad_es');
        $establecimiento->region_es = $request->input('region_es');
        $establecimiento->ag_reg = $request->input('ag_reg');
        $establecimiento->codpostal_es = $request->input('codpostal_es');
        $establecimiento->casilla_es = $request->input('casilla_es');
        $establecimiento->correo_es = $request->input('correo_es');
        $establecimiento->carea_es = $request->input('carea_es');
        $establecimiento->fono1_es = $request->input('fono1_es');
        $establecimiento->fono2_es = $request->input('fono2_es');
        $establecimiento->fax_es = $request->input('fax_es');
        $establecimiento->email1_es = $request->input('email1_es');
        $establecimiento->email2_es = $request->input('email2_es');
        $establecimiento->email3_es = $request->input('email3_es');
        $establecimiento->pweb_es = $request->input('pweb_es');
        $establecimiento->planes_es = $request->input('planes_es');
        $establecimiento->director_es = $request->input('director_es');
        $establecimiento->ndirector_es = $request->input('ndirector_es');
        $establecimiento->rut_es = $request->input('rut_es');
        $establecimiento->tipo1_es = $request->input('tipo1_es');
        $establecimiento->tipo2_es = $request->input('tipo2_es');
        $establecimiento->fono2_es = $request->input('fono2_es');
        $establecimiento->representante_es = $request->input('representante_es');
        $establecimiento->nlegal_es = $request->input('nlegal_es');
        $establecimiento->rutlegal_es = $request->input('rutlegal_es');
        $establecimiento->sostenedor_es = $request->input('sostenedor_es');
        $establecimiento->nsostenedor_es = $request->input('nsostenedor_es');
        $establecimiento->rutsostenedor_es = $request->input('rutsostenedor_es');

        $establecimiento->ccatolico_es = $request->input('ccatolico_es');
        $establecimiento->claico_es = $request->input('claico_es');
        $establecimiento->confesion_es = $request->input('confesion_es');
        $establecimiento->fundacionfecha_es = $request->input('fundacionfecha_es');
        $establecimiento->ndrecreto_es = $request->input('ndrecreto_es');
        $establecimiento->dmineduc_es = $request->input('dmineduc_es');
        $establecimiento->resolucion_es = $request->input('resolucion_es');

        $establecimiento->prebasic = $request->input('prebasic');
        $establecimiento->generalbasic = $request->input('generalbasic');
        $establecimiento->especial = $request->input('especial');
        $establecimiento->humanista_cientifica = $request->input('humanista_cientifica');
        $establecimiento->tecprofesional = $request->input('tecprofesional');
        $establecimiento->jinfantiles = $request->input('jinfantiles');
        $establecimiento->otro = $request->input('otro');

        $establecimiento->estado = $request->input('estadoCheck');
        $establecimiento->estado_text = $this->setEstado($request);
        
        $establecimiento->save();

        Session::flash('message','Establecimiento actualizado correctamente');
    }

    public function updateRazon(Razon $razon,Request $request)
    {
        $razon->nombre_rs = $request->input('nombre_rs');
        $razon->tipo_rs = $request->input('tipo_rs');
        $razon->fineslucro_rs = $request->input('fineslucro_rs');
        $razon->rut_rs = $request->input('rut_rs');
        $razon->sucursal_rs = $request->input('sucursal_rs');
        $razon->direccion_rs = $request->input('direccion_rs');
        $razon->comuna_rs = $request->input('comuna_rs');
        $razon->ciudad_rs = $request->input('ciudad_rs');
        $razon->region_rs = $request->input('region_rs');
        $razon->fono_rs = $request->input('fono_rs');
        $razon->otic_rs = $request->input('otic_rs');
        $razon->otro1_rs = $request->input('otro1_rs');
        $razon->otro2_rs = $request->input('otro2_rs');

        $razon->save();
    }

    public function checkboxValue($value,$inputName)
    {
        if (Input::get($inputName)) {
            $value = 1;
        } else {
           $value = 0;
        }
        return $value;
    }

    public function updateFinanciamiento(Financiamiento $financiamiento, Request $request)
    {
        //dd($request);
        $financiamiento->subvencionado_fin = $this->checkboxValue($financiamiento->subvencionado_fin,'subvencionado_fin');
        $financiamiento->montoanual_fin = $request->input('montoanual_fin');
        $financiamiento->gratuidad_fin = $this->checkboxValue($financiamiento->gratuidad_fin,'gratuidad_fin');
        $financiamiento->gratuidadEscolar_fin = $this->checkboxValue($financiamiento->gratuidadEscolar_fin,'gratuidadEscolar_fin');

        $financiamiento->fincompartido_fin = $this->checkboxValue($financiamiento->fincompartido_fin,'fincompartido_fin');
        $financiamiento->ing_anual_fin = $request->input('ing_anual_fin');
        $financiamiento->nbecas_fin = $request->input('nbecas_fin');
        $financiamiento->escolaridadm_fin = $request->input('escolaridadm_fin');
        $financiamiento->nbecastotales_fin = $request->input('nbecastotales_fin');

        $financiamiento->pagado_fin = $this->checkboxValue($financiamiento->pagado_fin,'pagado_fin');
        $financiamiento->vmatriculasPagado_fin = $request->input('vmatriculasPagado_fin');
        $financiamiento->nbecasPagado_fin = $request->input('nbecasPagado_fin');
        $financiamiento->escolaridadPagado_fin = $request->input('escolaridadPagado_fin');
        $financiamiento->nbecastotalesPagado_fin = $request->input('nbecastotalesPagado_fin');

        $financiamiento->corporatizado_fin = $this->checkboxValue($financiamiento->corporatizado_fin,'corporatizado_fin');
        $financiamiento->monto_corp_fin = $request->input('monto_corp_fin');
        $financiamiento->ingresoanual_corp_fin = $request->input('ingresoanual_corp_fin');
        $financiamiento->aportecalidad_corp_fin = $request->input('aportecalidad_corp_fin');

        $financiamiento->inscripcionSep_fin = $request->input('inscripcionSep_fin');
        $financiamiento->alumnosub_fin = $request->input('alumnosub_fin');
        $financiamiento->alumnosvulnerables_fin = $request->input('alumnosvulnerables_fin');

        $financiamiento->save();

        Session::flash('message','Financiamiento actualizado correctamente');
    }

    public function updateSep(Sep $sep, Request $request)
    {
        //dd($request);
        $sep->inscrito_sep = $request->input('inscrito_sep');
        $sep->clasificacion_sep = $request->input('clasificacion_sep');
        $sep->convenio_pie_sep = $request->input('convenio_pie_sep');
        $sep->alumnos_prioritarios_sep = $request->input('alumnos_prioritarios_sep');
        $sep->alumnos_vulnerables_sep = $request->input('alumnos_vulnerables_sep');

        $sep->save();

        Session::flash('message','Sep actualizado correctamente');
    }

    public function updateAlumnado(Alumnado $alumnado, Request $request)
    {
        $alumnado->ncursos_pre_al = $request->input('ncursos_pre_al');
        $alumnado->nalumnos_hombre_pre_al = $request->input('nalumnos_hombre_pre_al');
        $alumnado->nalumnos_mujer_pre_al = $request->input('nalumnos_mujer_pre_al');
        $alumnado->ncursos_primero_al = $request->input('ncursos_primero_al');
        $alumnado->nalumnos_hombre_primero_al = $request->input('nalumnos_hombre_primero_al');
        $alumnado->nalumnos_mujer_primero_al = $request->input('nalumnos_mujer_primero_al');
        $alumnado->ncursos_segundo_al = $request->input('ncursos_segundo_al');
        $alumnado->nalumnos_hombre_segundo_al = $request->input('nalumnos_hombre_segundo_al');
        $alumnado->nalumnos_mujer_segundo_al = $request->input('nalumnos_mujer_segundo_al');
        $alumnado->ncursos_tercero_al = $request->input('ncursos_tercero_al');
        $alumnado->nalumnos_hombre_tercero_al = $request->input('nalumnos_hombre_tercero_al');
        $alumnado->nalumnos_mujer_tercero_al = $request->input('nalumnos_mujer_tercero_al');
        $alumnado->ncursos_cuarto_al = $request->input('ncursos_cuarto_al');
        $alumnado->nalumnos_hombre_cuarto_al = $request->input('nalumnos_hombre_cuarto_al');
        $alumnado->nalumnos_mujer_cuarto_al = $request->input('nalumnos_mujer_cuarto_al');
        $alumnado->ncursos_quinto_al = $request->input('ncursos_quinto_al');
        $alumnado->nalumnos_hombre_quinto_al = $request->input('nalumnos_hombre_quinto_al');
        $alumnado->nalumnos_mujer_quinto_al = $request->input('nalumnos_mujer_quinto_al');
        $alumnado->ncursos_sexto_al = $request->input('ncursos_sexto_al');
        $alumnado->nalumnos_hombre_sexto_al = $request->input('nalumnos_hombre_sexto_al');
        $alumnado->nalumnos_mujer_sexto_al = $request->input('nalumnos_mujer_sexto_al');
        $alumnado->ncursos_septimo_al = $request->input('ncursos_septimo_al');
        $alumnado->nalumnos_hombre_septimo_al = $request->input('nalumnos_hombre_septimo_al');
        $alumnado->nalumnos_mujer_septimo_al = $request->input('nalumnos_mujer_septimo_al');
        $alumnado->ncursos_octavo_al = $request->input('ncursos_octavo_al');
        $alumnado->nalumnos_hombre_octavo_al = $request->input('nalumnos_hombre_octavo_al');
        $alumnado->nalumnos_mujer_octavo_al = $request->input('nalumnos_mujer_octavo_al');

        $alumnado->ncursos_primerome_al = $request->input('ncursos_primerome_al');
        $alumnado->nalumnos_hombre_primerome_al = $request->input('nalumnos_hombre_primerome_al');
        $alumnado->nalumnos_mujer_primerome_al = $request->input('nalumnos_mujer_primerome_al');
        $alumnado->ncursos_segundome_al = $request->input('ncursos_segundome_al');
        $alumnado->nalumnos_hombre_segundome_al = $request->input('nalumnos_hombre_segundome_al');
        $alumnado->nalumnos_mujer_segundome_al = $request->input('nalumnos_mujer_segundome_al');
        $alumnado->ncursos_tercerome_al = $request->input('ncursos_tercerome_al');
        $alumnado->nalumnos_hombre_tercerome_al = $request->input('nalumnos_hombre_tercerome_al');
        $alumnado->nalumnos_mujer_tercerome_al = $request->input('nalumnos_mujer_tercerome_al');
        $alumnado->ncursos_cuartome_al = $request->input('ncursos_cuartome_al');
        $alumnado->nalumnos_hombre_cuartome_al = $request->input('nalumnos_hombre_cuartome_al');
        $alumnado->nalumnos_mujer_cuartome_al = $request->input('nalumnos_mujer_cuartome_al');

        $alumnado->nalumnos_cientihumanista_al = $request->input('nalumnos_cientihumanista_al');
        $alumnado->nalumnos_tecprofesional_al = $request->input('nalumnos_tecprofesional_al');
        $alumnado->nalumnos_polivarente_al = $request->input('nalumnos_polivarente_al');
        $alumnado->nalumnos_emabarazadas_al = $request->input('nalumnos_emabarazadas_al');

        $alumnado->nalumnos_hombre_salcuna_al = $request->input('nalumnos_hombre_salcuna_al');
        $alumnado->nalumnos_mujer_salcuna_al = $request->input('nalumnos_mujer_salcuna_al');
        $alumnado->nalumnos_hombre_nmedio_al = $request->input('nalumnos_hombre_nmedio_al');
        $alumnado->nalumnos_mujer_nmedio_al = $request->input('nalumnos_mujer_nmedio_al');
        $alumnado->nalumnos_emabarazadas_al = $request->input('nalumnos_emabarazadas_al');

        $alumnado->nalumnos_hombre_nmediom_al = $request->input('nalumnos_hombre_nmediom_al');
        $alumnado->nalumnos_mujer_nmediom_al = $request->input('nalumnos_mujer_nmediom_al');
        $alumnado->nalumnos_hombre_trans1_al = $request->input('nalumnos_hombre_trans1_al');
        $alumnado->nalumnos_mujer_trans1_al = $request->input('nalumnos_mujer_trans1_al');
        $alumnado->nalumnos_hombre_trans2_al = $request->input('nalumnos_hombre_trans2_al');
        $alumnado->nalumnos_mujer_trans2_al = $request->input('nalumnos_mujer_trans2_al');

        $alumnado->save();

        Session::flash('message','Alumnado actualizado correctamente');
    }

    public function updatePersonal(Personal $personal, Request $request)
    {
        //dd($request);
        $personal->tdocentes_hombre_pe = $request->input('tdocentes_hombre_pe');
        $personal->tdocentes_mujer_pe = $request->input('tdocentes_mujer_pe');
        $personal->asistentes_hombre_pe = $request->input('asistentes_hombre_pe');
        $personal->asistentes_mujer_pe = $request->input('asistentes_mujer_pe');
        $personal->prom1_pe = $request->input('prom1_pe');
        $personal->prom2_pe = $request->input('prom2_pe');
        $personal->prom3_pe = $request->input('prom3_pe');
        $personal->formDoctores_pe = $request->input('formDoctores_pe');
        $personal->formMagister_pe = $request->input('formMagister_pe');
        $personal->formLicenciado_pe = $request->input('formLicenciado_pe');
        $personal->formDtitulo_pe = $request->input('formDtitulo_pe');
        $personal->formDAuth_pe = $request->input('formDAuth_pe');
        $personal->formOros_pe = $request->input('formOros_pe');

        $personal->save();

        Session::flash('message','Personal actualizado correctamente');
    }

    public function updateResultadosNacional(Request $request,$id)
    {
        //dd($request);
        $registroFormulario = Formulario::find($id);

        $año_pnacional = $request->input('año_pnacional');
        $nalumnos_4to_pnacional = $request->input('nalumnos_4to_pnacional');
        $len_4to_pnacional = $request->input('len_4to_pnacional');
        $mat_4to_pnacional = $request->input('mat_4to_pnacional');
        $comp_4to_pnacional = $request->input('comp_4to_pnacional');

        $nalumnos_8vo_pnacional = $request->input('nalumnos_8vo_pnacional');
        $leng_8vo_pnacional = $request->input('leng_8vo_pnacional');
        $mat_8vo_pnacional = $request->input('mat_8vo_pnacional');
        $sociales_8vo_pnacional = $request->input('sociales_8vo_pnacional');
        $cnaturales_8vo_pnacional = $request->input('cnaturales_8vo_pnacional');

        $nalumnos_2dom_pnacional = $request->input('nalumnos_2dom_pnacional');
        $len_2dom_pnacional = $request->input('len_2dom_pnacional');
        $mat_2dom_pnacional = $request->input('mat_2dom_pnacional');
        
        $totalReguistros = sizeof($request->input('año_pnacional'));

        $resultados = DB::table('detalle_nacionals')->where('formulario_id', $registroFormulario->id)->get();

        //Limpiar reguistros anteriores
        if(count($resultados)>0)
        {
            for ($i = 0; $i < count($resultados); $i++) {
   
                $resultadosNacional = ResultadosNacional::find($resultados[$i]->nacional_id);
                $resultadosNacional->delete();
            }
        }

        for ($i = 0; $i < $totalReguistros; $i++) {
            
            $detalleNacional = new DetalleNacional();
            $resultadosNacional = new ResultadosNacional();

            $resultadosNacional->año_pnacional = $año_pnacional[$i];
            $resultadosNacional->nalumnos_4to_pnacional = $nalumnos_4to_pnacional[$i];
            $resultadosNacional->len_4to_pnacional = $len_4to_pnacional[$i];
            $resultadosNacional->mat_4to_pnacional = $mat_4to_pnacional[$i];
            $resultadosNacional->comp_4to_pnacional = $comp_4to_pnacional[$i];
            $resultadosNacional->nalumnos_8vo_pnacional = $nalumnos_8vo_pnacional[$i];
            $resultadosNacional->leng_8vo_pnacional = $leng_8vo_pnacional[$i];
            $resultadosNacional->mat_8vo_pnacional = $mat_8vo_pnacional[$i];
            $resultadosNacional->sociales_8vo_pnacional = $sociales_8vo_pnacional[$i];
            $resultadosNacional->cnaturales_8vo_pnacional = $cnaturales_8vo_pnacional[$i];
            $resultadosNacional->nalumnos_2dom_pnacional = $nalumnos_2dom_pnacional[$i];
            $resultadosNacional->len_2dom_pnacional = $len_2dom_pnacional[$i];
            $resultadosNacional->mat_2dom_pnacional = $mat_2dom_pnacional[$i];
            $resultadosNacional->save();

            //Registro Nacional
            $detalleNacional->formulario_id = $registroFormulario->id;
            $detalleNacional->nacional_id = $resultadosNacional->id;
            $detalleNacional->save();
        }

        Session::flash('message','Resultados Prueba Nacional actualizado correctamente');
    }

    public function updateResultadosPsu(Request $request,$id)
    {
        dd($request);
        $registroFormulario = Formulario::find($id);

        $psuAño = $request->input('año_psu');
        $psu_lenguaje = $request->input('psu_lenguaje');
        $psu_matematica = $request->input('psu_matematica');
        $psu_historia = $request->input('psu_historia');
        $psu_ciencia = $request->input('psu_ciencia');

        $totalReguistros = sizeof($request->input('año_psu'));

        $resultados = DB::table('detalle_psus')->where('formulario_id', $registroFormulario->id)->get();
        //dd($resultados);

        //Limpiar reguistros anteriores
        if(count($resultados)>0)
        {
            for ($i = 0; $i < count($resultados); $i++) {
   
                $resultadosPsu = ResultadosPsu::find($resultados[$i]->psu_id);
                $resultadosPsu->delete();
            }
        }

        for ($i = 0; $i < $totalReguistros; $i++) {
   
            $detallePsu = new DetallePsu();
            $resultadosPsu = new ResultadosPsu();

            $resultadosPsu->año_psu = $psuAño[$i];
            $resultadosPsu->psu_lenguaje = $psu_lenguaje[$i];
            $resultadosPsu->psu_matematica = $psu_matematica[$i];
            $resultadosPsu->psu_historia = $psu_historia[$i];
            $resultadosPsu->psu_ciencia = $psu_ciencia[$i];

            $resultadosPsu->save();

            //Registro PSU
            $detallePsu->formulario_id = $registroFormulario->id;
            $detallePsu->psu_id = $resultadosPsu->id;
            $detallePsu->save();
        }


        Session::flash('message','Resultados PSU actualizados correctamente');
    }

    public function updateIndPedagogicos(IndPedagogicos $indPedagogicos, Request $request)
    {
        //dd($request);
        $indPedagogicos->promAlumnos_in = $request->input('promAlumnos_in');
        $indPedagogicos->repAlumnos_in = $request->input('repAlumnos_in');
        $indPedagogicos->desercionAlumnos_in = $request->input('desercionAlumnos_in');

        $indPedagogicos->save();

        Session::flash('message','Ind. Pedagogicos actualizado correctamente');    
    }

    public function updateSiEspecial(SiEspecial $siEspecial, Request $request)
    {
        //dd($request);

        $siEspecial->proyectos_sitE = $request->input('proyectos_sitE');
        $siEspecial->alumnos_sitE = $request->input('alumnos_sitE');
        $siEspecial->caracteristica_sitE = $request->input('caracteristica_sitE');

        $siEspecial->save();

        Session::flash('message','Si Especial actualizado correctamente');
    }

    public function updateTecnicoProfesional(Request $request,$id)
    {
        //dd($request);
        $registroFormulario = Formulario::find($id);

        $nombre_espTec = $request->input('nombre_espTec');
        $acreditada_espTec = $request->input('acreditada_espTec');
        $vigencia_inicio_espTec = $request->input('vigencia_inicio_espTec');
        $vigencia_fin_espTec = $request->input('vigencia_fin_espTec');
        $ntitulados_espTec = $request->input('ntitulados_espTec');
        $nempresas_espTec = $request->input('nempresas_espTec');
        $consejoem_espTec = $request->input('consejoem_espTec');
        $observacion_espTec = $request->input('observacion_espTec');

        $totalReguistros = sizeof($request->input('nombre_espTec'));

        $resultados = DB::table('tecnico_prefesional_detalles')->where('formulario_id', $registroFormulario->id)->get();

        //Limpiar reguistros anteriores
        if(count($resultados)>0)
        {
            for ($i = 0; $i < count($resultados); $i++) {
   
                $espTecProfesional = EspTecProfesional::find($resultados[$i]->tecnico_profesional_id);
                $espTecProfesional->delete();
            }
        }

        for ($i = 0; $i < $totalReguistros; $i++) 
        {
            $tecnicoProfesionalDetalle = new TecnicoProfesionalDetalle();
            $espTecProfesional = new EspTecProfesional();

            $espTecProfesional->nombre_espTec = $nombre_espTec[$i];
            $espTecProfesional->acreditada_espTec = $acreditada_espTec[$i];
            $espTecProfesional->vigencia_inicio_espTec = $vigencia_inicio_espTec[$i];
            $espTecProfesional->vigencia_fin_espTec = $vigencia_fin_espTec[$i];
            $espTecProfesional->ntitulados_espTec = $ntitulados_espTec[$i];
            $espTecProfesional->nempresas_espTec = $nempresas_espTec[$i];
            $espTecProfesional->consejoem_espTec = $consejoem_espTec[$i];
            $espTecProfesional->observacion_espTec = $observacion_espTec[$i];
            $espTecProfesional->save();

            //Detalle
            $tecnicoProfesionalDetalle->tecnico_profesional_id = $espTecProfesional->id;
            $tecnicoProfesionalDetalle->formulario_id = $registroFormulario->id;
            $tecnicoProfesionalDetalle->save();
        }

        Session::flash('message','Datos Tecnico Profesional actualizado correctamente');
    }

    public function updateContingencia(Contingencia $contingencia, Request $request)
    {
        //dd($request);

        $contingencia->inspeccion_trabajo_con = $request->input('inspeccion_trabajo_con');
        $contingencia->fineslucro_rs = $request->input('fineslucro_rs');
        $contingencia->denuncias_sernac_con = $request->input('denuncias_sernac_con');
        $contingencia->observaciones_con = $request->input('observaciones_con');
        $contingencia->denuncias_junji_con = $request->input('denuncias_junji_con');
        
        $contingencia->save();

        Session::flash('message','Contingencia actualizada correctamente');
    }

    public function show($id)
    {
        $readonly = true;
        $registroFormulario = Formulario::find($id);

        $establecimiento = Establecimiento::find($registroFormulario->establecimiento_id);
        $razon = Razon::find($registroFormulario->razon_id);
        $financiamiento = Financiamiento::find($registroFormulario->financiamiento_id);
        $sep = Sep::find($registroFormulario->sep_id);
        $alumnado = Alumnado::find($registroFormulario->alumnado_id);
        $personal = Personal::find($registroFormulario->personal_id);
        //$resultadosNacional = ResultadosNacional::find($registroFormulario->resultados_nacional_id);
        //$resultadosPsu = ResultadosPsu::find($registroFormulario->resultados_psu_id);
        $indPedagogicos = IndPedagogicos::find($registroFormulario->ind_pedagogico_id);
        $siEspecial = SiEspecial::find($registroFormulario->si_especial_id);
        $espTecProfesional = EspTecProfesional::find($registroFormulario->esp_tec_profesional_id);
        $contingencia = Contingencia::find($registroFormulario->contingencia_id);
        
        //dd($registroFormulario);

        $resultadosPsu = DB::table('detalle_psus')->where('formulario_id', $registroFormulario->id)->get();

        $psu = null;
        for ($i = 0; $i < count($resultadosPsu); $i++){
            $psu[$i] = ResultadosPsu::find($resultadosPsu[$i]->psu_id);
        }

        //Resultados Prueba Nacional
        $resultadosNacional = DB::table('detalle_nacionals')->where('formulario_id', $registroFormulario->id)->get();

        $nacional = null;
        for ($i = 0; $i < count($resultadosNacional); $i++){
            $nacional[$i] = ResultadosNacional::find($resultadosNacional[$i]->nacional_id);
        }

        //Resultados Tecnico Profesional
        $resultadosTecProfesional = DB::table('tecnico_prefesional_detalles')->where('formulario_id', $registroFormulario->id)->get();

        $tecnico = null;
        for ($i = 0; $i < count($resultadosTecProfesional); $i++){
            $tecnico[$i] = EspTecProfesional::find($resultadosTecProfesional[$i]->tecnico_profesional_id);
        }

        //dd($resultadosPsu);
        //dd($nacional);

        return view('formularios.index',[
            "establecimiento" => $establecimiento,
            "razon" => $razon,
            "financiamiento" => $financiamiento,
            "sep" => $sep,
            "alumnado" => $alumnado,
            "personal" => $personal,
            "resultadosPsu" => $resultadosPsu,
            "psu" => $psu,
            "resultadosNacional" => $resultadosNacional,
            "nacional" => $nacional,
            "indPedagogicos" => $indPedagogicos,
            "siEspecial" => $siEspecial,
            "resultadosTecProfesional" => $resultadosTecProfesional,
            "tecnico" => $tecnico,
            "contingencia" => $contingencia,
            "readonly" => $readonly,
            "registroFormulario" => $registroFormulario,
        ]);
    }

    public function edit($id)
    {
        $readonly = false;

        $registroFormulario = Formulario::find($id);

        $establecimiento = Establecimiento::find($registroFormulario->establecimiento_id);
        $razon = Razon::find($registroFormulario->razon_id);
        $financiamiento = Financiamiento::find($registroFormulario->financiamiento_id);
        $sep = Sep::find($registroFormulario->sep_id);
        $alumnado = Alumnado::find($registroFormulario->alumnado_id);
        $personal = Personal::find($registroFormulario->personal_id);
        //$resultadosNacional = ResultadosNacional::find($registroFormulario->resultados_nacional_id);
        //$resultadosPsu = ResultadosPsu::find($registroFormulario->resultados_psu_id);
        $indPedagogicos = IndPedagogicos::find($registroFormulario->ind_pedagogico_id);
        $siEspecial = SiEspecial::find($registroFormulario->si_especial_id);
        //$espTecProfesional = EspTecProfesional::find($registroFormulario->esp_tec_profesional_id);
        $contingencia = Contingencia::find($registroFormulario->contingencia_id);
        

        $resultadosPsu = DB::table('detalle_psus')->where('formulario_id', $registroFormulario->id)->get();
        $psu = null;

        for ($i = 0; $i < count($resultadosPsu); $i++){
            $psu[$i] = ResultadosPsu::find($resultadosPsu[$i]->psu_id);
        }

        //Resultados Prueba Nacional
        $resultadosNacional = DB::table('detalle_nacionals')->where('formulario_id', $registroFormulario->id)->get();

        $nacional = null;
        for ($i = 0; $i < count($resultadosNacional); $i++){
            $nacional[$i] = ResultadosNacional::find($resultadosNacional[$i]->nacional_id);
        }

        //Resultados Tecnico Profesional
        $resultadosTecProfesional = DB::table('tecnico_prefesional_detalles')->where('formulario_id', $registroFormulario->id)->get();

        $tecnico = null;
        for ($i = 0; $i < count($resultadosTecProfesional); $i++){
            $tecnico[$i] = EspTecProfesional::find($resultadosTecProfesional[$i]->tecnico_profesional_id);
        }

        //dd($tecnico);

        return view('formularios.index',[
            "establecimiento" => $establecimiento,
            "razon" => $razon,
            "financiamiento" => $financiamiento,
            "sep" => $sep,
            "alumnado" => $alumnado,
            "personal" => $personal,
            "resultadosPsu" => $resultadosPsu,
            "psu" => $psu,
            "resultadosNacional" => $resultadosNacional,
            "nacional" => $nacional,
            "indPedagogicos" => $indPedagogicos,
            "siEspecial" => $siEspecial,
            "resultadosTecProfesional" => $resultadosTecProfesional,
            "tecnico" => $tecnico,
            "contingencia" => $contingencia,
            "readonly" => $readonly,
            "registroFormulario" => $registroFormulario,
        ]);
    }

    public function destroy($id)
    {
        dd($id);
        //User::find($id)->delete();
       // return redirect::to('usuarios') ;
    }
    

}
