<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Reporte;

class ReporteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admins()
    {
        $reportes = Reporte::where('tipo', 'Admin')->orderBy('id', 'DESC')->paginate(40);
        return view('reportes.administradores',compact('reportes'));
    }

    public function users()
    {
        $reportes = Reporte::where('tipo', 'Usuario')->orderBy('id', 'DESC')->paginate(40);
        return view('reportes.usuarios',compact('reportes'));
    }
}
