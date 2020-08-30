<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ReporteController extends Controller{

  public function postReporteVisita(Request $request){
    $inicio = date('Y-m-d', strtotime($request->inicio));
    $fin    = date('Y-m-d', strtotime($request->fin));

    $datos = \DB::table('visitas')
                        ->join('libros','visitas.id_libro', '=', 'libros.id')
                        ->join('users', 'visitas.id_user',  '=', 'users.id')
                        ->where('visitas.fecha', '>', $inicio )
                        ->where('visitas.fecha', '<', $fin )
                        ->get();

    return view('reporte.visita', compact('datos'));
  }

  public function postReporteComentario(Request $request){
    //'id', 'remitente', 'correo', 'asunto', 'mensaje', 'id_user'
    $inicio = date('Y-m-d', strtotime($request->inicio));
    $fin    = date('Y-m-d', strtotime($request->fin));

    $datos = \DB::table('comentarios')
                        ->join('users', 'comentarios.id_user',  '=', 'users.id')
                        ->where('comentarios.created_at', '>', $inicio )
                        ->where('comentarios.created_at', '<', $fin )
                        ->select('comentarios.*', 'users.name')
                        ->get();
                        
    return view('reporte.comentario', compact('datos'));
  }

}
