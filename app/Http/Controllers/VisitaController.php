<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Visita;
class VisitaController extends Controller
{

  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Visita::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('visita.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $dato = new Visita;
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Visita');
  }

  public function show($id){
    $datos = Visita::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Visita::find($id);
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Visita');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Visita::find($id);
      $dato->delete();
      return "Visita Eliminado";
    }else{
      return redirect('/');
    }
  }

}
