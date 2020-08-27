<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  if (Auth::guest()){
    //return redirect(asset('index.php/login'));
    return view('estudiante');
  }else
    return view('estudiante');
});

Route::get('/home', function(){
  if ( !isset( \Auth::user()->id ) ){
    $link = asset('index.php/login');
    return redirect($link);
  }else
    return redirect('/');
});

//Route::get('/Ver', 'CategoriaController@getListarSub');

Route::get('/Estudiante', 'EstudianteController@index');
Route::get('/Estudiante/Ver/{id}', 'EstudianteController@getVer');
Route::post('/Estudiante/Comentario', 'EstudianteController@postComentario')->name('comentario');

Route::resource('Libro', 'LibroController');
Route::get('/Listar/Categoria/{id}', 'CategoriaController@getListarSub');
Route::resource('Categoria', 'CategoriaController');

Route::resource('Subcatergoria', 'SubcategoriaController');
Route::resource('Comentario', 'ComentarioController');
Route::resource('Visita', 'VisitaController');

// Administracion de Usuarios
Route::get('usuarios', 'UsuarioController@index');
Route::get('usuarios/create', 'UsuarioController@showRegistrationForm');
Route::post('usuarios', 'UsuarioController@create')->name('usuarios');
Route::get('usuarios/{id}', 'UsuarioController@viewuser');
Route::get('usuarios/{id}/edit', 'UsuarioController@edit');
Route::patch('usuarios/{id}', 'UsuarioController@update')->name('usuario.update');
Route::get('usuarios/info/ver', 'UsuarioController@profile');
Route::post('usuarios/info/ver', 'UsuarioController@profileActulizar');

Route::get('/clave', 'UsuarioController@claveGet')->name('usuario.clave');
Route::post('/clave', 'UsuarioController@clavePost')->name('usuario.cambiar');

Auth::routes();
