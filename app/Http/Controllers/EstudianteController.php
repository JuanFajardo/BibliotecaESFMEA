<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
    if( \Auth::guest() )
      return redirect('index.php/login');
  }

  public function index(){
    $libros   = \App\Libro::Where('tipo', '=', 'libro')->get();
    $sistemas = \App\Libro::Where('tipo', '=', 'sistematisaciones')->get();
    return view('estudiante.index', compact('libros', 'sistemas'));
  }

  public function getVer($id){
    $idUser = \Auth::user()->id;
    $libro  = \App\Libro::find($id);

    $dato = new \App\Visita;
    $dato->ip         = \Request::getClientIp();
    $dato->navegador  = $_SERVER['HTTP_USER_AGENT'];
    $dato->id_user    = $idUser;
    $dato->id_libro   = $id;
    $dato->tipo       = $libro->tipo;
    $dato->fecha      = date('Y-m-d');
    $dato->save();
    
    $ver = "SI";

    if($libro != "libro"){
      $contador = \App\Visita::Where('tipo', '=', 'sistematisaciones')->where('id_user', '=', $idUser)->count();
      $ver = $contador<5 ?  "SI" : "NO";
    }

    return view('estudiante.ver', compact('libro', 'ver'));
  }
}
