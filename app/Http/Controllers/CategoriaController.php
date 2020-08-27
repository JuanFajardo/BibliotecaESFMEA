<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Categoria;
class CategoriaController extends Controller
{
  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Categoria::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('categoria.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $dato = new Categoria;
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Categoria');
  }

  public function show($id){
    $datos = Categoria::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Categoria::find($id);
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Categoria');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Categoria::find($id);
      $dato->delete();
      return "Categoria Eliminado";
    }else{
      return redirect('/');
    }
  }

  public function getListarSub($id){
    $datos = \App\Subcategoria::Where('id_categoria', '=', $id)->get();
    return $datos;
  }

}
