<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
   protected $table = 'libros';
   protected $fillable = [ 'id', 'foto', 'titulo', 'autor', 'descripcion', 'archivo', 'tipo', 'id_categoria', 'id_subcategoria' ];

   public function setFotoAttribute($foto){
     $this->attributes['foto'] = md5(date('Y_m_d_H_i_s_')).'_'.$foto->getClientOriginalName();
     $name = md5(date('Y_m_d_H_i_s_')).'_'.$foto->getClientOriginalName();
     \Storage::disk('local')->put($name, \File::get($foto));
   }

}
