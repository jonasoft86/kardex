<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use DB;
use App\User;
use Redirect;
use Session;

class AdministradorController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $admins = User::where('tipo', 'Admin')->paginate(6);
        return view('administradores.index',compact('admins'));
    }

    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->tipo = $request->input('type');
        $user->telephone = $request->input('telephone');
        $user->password = bcrypt($request->input('password'));

        $this->validate($request, [
            'email' => 'unique:users',
        ]);

        $user->save();
        Session::flash('message','Administrador creado correctamente');

        return redirect::to('administradores') ;
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //$user = User::find($id);
        //return view('administradores.edit',compact('user'));
    }


    public function update(Request $request, $id)
    {
        //dd($request);
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->tipo = $request->input('type');
        $user->telephone = $request->input('telephone');
        $user->password = bcrypt($request->input('password'));

        $user->update();
        Session::flash('message','Administrador actualizado correctamente');

        return redirect::to('administradores') ;
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect::to('administradores') ;
    }
}
