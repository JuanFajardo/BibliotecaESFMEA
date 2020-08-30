<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Libro;
class LibroController extends Controller
{

  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = \DB::table('libros')->join('categorias', 'libros.id_categoria', '=', 'categorias.id')
                                 ->join('subcategorias', 'libros.id_subcategoria', '=', 'subcategorias.id')
                                  ->select('libros.*', 'categorias.nombre_categoria', 'subcategorias.nombre_subcategoria')->get();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('libro.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $dato = new Libro;
    $request['user_id'] = \Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Libro');
  }

  public function show($id){
    $datos = Libro::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){

    if( $request->archivo != "" ){
      $dato = Libro::find($id);
      $dato->fill($request->all());
      $dato->save();
    }else{
      $dato = Libro::find($id);
      $dato->foto             = $request->foto;
      $dato->titulo           = $request->titulo;
      $dato->autor            = $request->autor;
      $dato->descripcion      = $request->descripcion;
      $dato->tipo             = $request->tipo;
      $dato->id_categoria     = $request->id_categoria;
      $dato->id_subcategoria  = $request->id_subcategoria;
      $dato->save();

    }
    return redirect('/Libro');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Libro::find($id);
      $dato->delete();
      return "Libro Eliminado";
    }else{
      return redirect('/');
    }
  }

}
