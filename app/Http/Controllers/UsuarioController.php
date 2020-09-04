<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class UsuarioController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
    if( \Auth::guest() )
      return redirect('index.php/login');
  }

  public function index(){
        $usuarios = User::all();
        return view('auth.lista')->with('usuarios', $usuarios);
  }

  public function showRegistrationForm(){
      return view('auth.register');
  }

  protected function validator(array $data){
      return Validator::make($data, [
          'name' => 'required|max:255',
          //'email' => 'required|email|max:255',
          'password' => 'required|confirmed|min:6',
      ]);
  }

  protected function create(Request $data){
    //return $data->all();
    $data['password'] = bcrypt($data['password']);
    $dato = new User;
    $dato->fill($data->all());
    $dato->save();
    return redirect('/usuarios');
  }

  public function edit($id){
    $user = User::find($id);
    $centros = ['Administrador', 'Estudiante', 'Reporte'];
    return view('auth.editar', compact('user', 'centros'));
  }

  public function update(Request $request, $id){

    $user = User::find($id);
    if ( \Auth::user()->grupo == "Administrador"){
      $user = User::find($id);
      if( strlen($request->input('password')) > 0 )
        $user->password = bcrypt($request->input('password'));
      $user->name         = $request->input('name');
      $user->email        = $request->input('email');
      $user->ci           = $request->input('ci');
      $user->ap_paterno   = $request->input('ap_paterno');
      $user->ap_materno   = $request->input('ap_materno');
      $user->nombres      = $request->input('nombres');
      $user->nivel        = $request->input('nivel');
      $user->paralelo     = $request->input('paralelo');
      $user->especialidad = $request->input('especialidad');
      $user->reg_estudiante= $request->input('reg_estudiante');
      $user->activo       = $request->input('activo');
      $user->grupo        = $request->input('grupo');
      $user->save();
    }
    return redirect('/usuarios');
  }

  public function viewuser($id){
    $user = User::find($id);
    return view('auth.ver', compact('user'));
  }

  public function profile(Request $request){
    $id = \Auth::user()->id;
    $user = User::find($id);
    return view('auth.profile', compact('user'));
  }


  public function profileActulizar(Request $request){
    $id = \Auth::user()->id;
    $user = User::find($id);
    $estado = false;
    if($request->input('estado') == 'on'){
        $estado = true;
    }
    $user->name       = $request->input('name');
    $user->email      = $request->input('email');
    if( strlen($request->input('password')) > 0 )
      $user->password = bcrypt($request->input('password'));
    $user->grupo_id   = $request->input('grupo_id');
    $user->nombres    = $request->input('nombres');
    $user->apellidos  = $request->input('apellidos');
    $user->ci         = $request->input('ci');
    $user->direccion  = $request->input('direccion');
    $user->telefono   = $request->input('telefono');
    $user->observacion= $request->input('observacion');
    $user->estado     = $estado;
    $user->save();
    return  redirect('usuarios/info/ver?msj=1');
  }

  public function delete($id){/*
    $user = User::find($id);
    $user->delete();
    return redirect()->action('Auth\AuthController@index');*/
  }

  public function encargadoAgregar(Request $request, $id){
    $datos = explode('|', $id);
    if( count($datos) == 2 ){
      $salud= $datos[0];
      $id   = $datos[1];
      $usuario = \App\User::find($id);
      if( count($usuario) >0 ){
        $contador = \DB::table('encargados')->where('id_user', '=', $usuario->id)->count();
      }else{
          return array(["error"=>"error"]);
      }
    }else{
      return array(["error"=>"error"]);
    }
  }

  public function encargadoEliminar($id){
    $dato = \App\Encargado::find($id);
    $dato->delete();
  }

  public function claveGet(){
    return view('auth.clave');
  }

  public function clavePost(Request $request){
  //return $request->all();
  /*$id = \Auth::user()->id;
  $dato = \App\User::find($id);
  $dato->password = bcrypt($request->clave);
  $dato->save();
  $clave = "OK";
  return redirect('/')->with( ['clave' => $clave] );;
  */
  }

}
