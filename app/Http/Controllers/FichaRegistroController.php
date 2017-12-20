<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

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
use Yajra\Datatables\Facades\Datatables;

use Auth;
use Redirect;
use Session;
use DB;

class FichaRegistroController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function nueva()
    {
       return view('fichasregistros.nueva');
    }

    public function index()
    {
        echo 'index';
        //return view('fichasregistros.nueva');
    }

    //Mostrar las razones sociales (sucursales)
    public function filtrar(Request $request)
    {
        $query = "";

        if($request)
        {
            $query = trim($request->get('searchText'));
            //dd($query);
        }
        
        $formularios = DB::table('formularios as f')   
            ->join('establecimientos as e','f.establecimiento_id','=','e.id')
            ->join('razons as r','f.razon_id','=','r.id')
            ->select('f.id','e.nombre_es','e.codigo_rbd','r.nombre_rs',
            'r.rut_rs','r.sucursal_rs','r.comuna_rs','r.ciudad_rs')
            ->where('r.nombre_rs','LIKE','%'.$query.'%')
            ->orwhere('r.rut_rs','LIKE','%'.$query.'%')
            ->orwhere('r.sucursal_rs','LIKE','%'.$query.'%')
            ->orwhere('r.comuna_rs','LIKE','%'.$query.'%')
            ->orwhere('r.ciudad_rs','LIKE','%'.$query.'%')
            ->orwhere('e.nombre_es','LIKE','%'.$query.'%')
            ->orwhere('e.codigo_rbd','LIKE','%'.$query.'%')
            ->orderBy('f.id','desc')
            ->paginate(30);
            
        //dd($formularios);
        return view('fichasregistros.index',[
            "formularios" => $formularios,
            "searchText"=>$query
        ]);
    }

    public function store(Request $request)
    {
        //dd($request);
        //Formulario de registro
        $formulario  = new Formulario();
        $formulario->usuario_id = Auth::user()->id;       

        //Establecimiento
        $establecimiento  = new Establecimiento();
        $establecimiento->save();

        //Razon Social
        $razon = new Razon();
        $razon->nombre_rs = $request->input('nombre_rs');
        $razon->rut_rs = $request->input('rut_rs');

        //dd($request->input('rut_rs'));

        $razon->save();

        //Financiamiento
        $financiamiento  = new Financiamiento();
        $financiamiento->save();

        //Sep
        $sep = new Sep();
        $sep->save();

        //Alumnado
        $alumnado = new Alumnado();
        $alumnado->save();

        //Personal
        $personal = new Personal();
        $personal->save();

        /*
        //Resultados Nacional
        $resultadosNacional = new ResultadosNacional();
        $resultadosNacional->save();

        //Resultados PSU
        $resultadosPsu = new ResultadosPsu();
        $resultadosPsu->save();
        */

        //Indicadores Pedagogicos
        $indPedagogicos = new IndPedagogicos();
        $indPedagogicos->save();

        //Situaciones Especiales
        $siEspecial = new SiEspecial();
        $siEspecial->save();

        /*
        //Especialidad Tec Profesional
        $espTecProfesional = new EspTecProfesional();
        $espTecProfesional->save();
        */

        //Contingencia
        $contingencia = new Contingencia();
        $contingencia->save();

        $formulario->establecimiento_id = $establecimiento->id;
        $formulario->razon_id = $razon->id;
        $formulario->financiamiento_id = $financiamiento->id;
        $formulario->sep_id = $sep->id;
        $formulario->alumnado_id = $alumnado->id;
        $formulario->personal_id = $personal->id;
        //$formulario->resultados_nacional_id = $resultadosNacional->id;
        //$formulario->resultados_psu_id = $resultadosPsu->id;
        $formulario->ind_pedagogico_id = $indPedagogicos->id;
        $formulario->si_especial_id = $siEspecial->id;
        //$formulario->esp_tec_profesional_id = $espTecProfesional->id;
        $formulario->contingencia_id = $contingencia->id;

        $formulario->save();

        //return Redirect::to('formulario');
        return redirect()->intended('formulario')->with('formulario' , $formulario);

    }

    public function exportar()
    {
        return view('fichasregistros.exportar');
    }

    public function get_datatable()
    {
        $formularios = DB::table('formularios as f')   
            ->join('establecimientos as e','f.establecimiento_id','=','e.id')
            ->join('razons as r','f.razon_id','=','r.id')
            ->select('f.id','e.nombre_es','e.codigo_rbd','r.nombre_rs',
            'r.rut_rs','r.sucursal_rs','r.comuna_rs','r.ciudad_rs')
            ->orderBy('f.id', 'desc');
        return Datatables::of($formularios)
        ->make(true);
    }

    public function destroy($id)
    {
        //dd($id);
        Formulario::find($id)->delete();
        return redirect::to('filtrar') ;
    }
}
