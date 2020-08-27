<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Comentario;
class ComentarioController extends Controller
{

  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Comentario::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('comentario.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $dato = new Comentario;
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Comentario');
  }

  public function show($id){
    $datos = Comentario::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Comentario::find($id);
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Comentario');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Comentario::find($id);
      $dato->delete();
      return "Comentario Eliminado";
    }else{
      return redirect('/');
    }
  }

}
