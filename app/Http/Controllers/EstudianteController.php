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
    $libros   = \App\Libro::Where('tipo', '=', 'LIBRO')->get();
    $sistemas = \App\Libro::Where('tipo', '=', 'SISTEMATIZACION')->get();
    return view('estudiante.index', compact('libros', 'sistemas'));
  }

  public function libroGet(){
    $libros = \DB::table('libros')->join('categorias', 'libros.id_categoria', 'categorias.id')
                                  ->join('subcategorias', 'libros.id_subcategoria', 'subcategorias.id')
                                  ->select('libros.*', 'categorias.nombre_categoria', 'subcategorias.nombre_subcategoria')
                                  ->where('tipo', '=', 'LIBRO')
                                  ->get();
    $titulo =  "LIBROS";
    return view('estudiante.index', compact('libros', 'titulo'));
  }


  public function sistematizacionGet(){
    $libros = \DB::table('libros')->join('categorias', 'libros.id_categoria', 'categorias.id')
                                  ->join('subcategorias', 'libros.id_subcategoria', 'subcategorias.id')
                                  ->select('libros.*', 'categorias.nombre_categoria', 'subcategorias.nombre_subcategoria')
                                  ->where('libros.tipo', '=', 'SISTEMATIZACION')
                                  ->get();
    $titulo =  "SISTEMATIZACION";
    return view('estudiante.index', compact('libros', 'titulo'));
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
    $contador = \App\Visita::Where('tipo', '=', $libro->tipo)->where('id_user', '=', $idUser)->where('fecha', '=', date('Y-m-d'))->count();

    if( $libro->tipo == "LIBRO"){
      $ver = $contador < 4 ?  "SI" : "NO";
    }else{
      $ver = $contador < 3 ?  "SI" : "NO";
    }

    return view('estudiante.ver', compact('libro', 'ver'));
  }

  public function postComentario(Request $request){
    $dato = new \App\Comentario;
    $dato->remitente = $request->remitente;
    $dato->correo = $request->correo;
    $dato->asunto = $request->asunto;
    $dato->mensaje = $request->mensaje;
    $dato->id_user = \auth::user()->id;
    $dato->save();
    return redirect('/');
  }
}
