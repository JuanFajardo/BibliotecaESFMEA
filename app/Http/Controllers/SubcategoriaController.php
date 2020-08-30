<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Subcategoria;
class SubcategoriaController extends Controller
{

  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Subcategoria::all();
    $datos = \DB::table('subcategorias')->join('categorias', 'id_categoria', '=', 'categorias.id')
                                        ->select('subcategorias.*', 'categorias.nombre_categoria')
                                        ->get();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('subcategoria.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $dato = new Subcategoria;
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Subcatergoria');
  }

  public function show($id){
    $datos = Subcategoria::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Subcategoria::find($id);
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Subcatergoria');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Subcategoria::find($id);
      $dato->delete();
      return "Subcategoria Eliminado";
    }else{
      return redirect('/');
    }
  }

}
