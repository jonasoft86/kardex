<?php






Route::auth();

/*
Route::get('/', function () {
    return view('home');
});
*/

Route::get('/admin', 'FichaRegistroController@nueva');

Route::get('/', 'HomeController@index');

Route::resource('administradores', 'AdministradorController');
Route::resource('usuarios', 'UsuarioController');

Route::resource('ficha_registro', 'FichaRegistroController');

Route::get('crear_ficha', 'FichaRegistroController@nueva');
Route::get('filtrar', 'FichaRegistroController@filtrar');
Route::get('exportar', 'FichaRegistroController@exportar');
Route::get('exportar/get_datatable','FichaRegistroController@get_datatable');

Route::resource('formulario', 'FormularioController');


Route::get('reportes_admin', 'ReporteController@admins');
Route::get('reportes_user', 'ReporteController@users');
