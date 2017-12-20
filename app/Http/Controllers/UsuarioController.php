<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\User;
use Redirect;
use Session;

class UsuarioController extends Controller
{

    public function index()
    {
        $admins = User::where('tipo', 'Usuario')->paginate(6);
        return view('usuarios.index',compact('admins'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->telephone = $request->input('telephone');
        $user->password = bcrypt($request->input('password'));

        $this->validate($request, [
            'email' => 'unique:users',
        ]);

        $user->save();
        Session::flash('message','Usuario creado correctamente');

        return redirect::to('usuarios') ;
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
       // $user = User::find($id);
        //return view('usuarios.edit',compact('user'));
    }

 
    public function update(Request $request, $id)
    {
        //dd($request);
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->telephone = $request->input('telephone');
        $user->password = bcrypt($request->input('password'));

        $user->update();
        Session::flash('message','Usuario actualizado correctamente');

        return redirect::to('usuarios') ;
    }


    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect::to('usuarios') ;
    }
}
