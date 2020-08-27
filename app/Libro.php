<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
   protected $table = 'libros';
   protected $fillable = [ 'id', 'foto', 'titulo', 'autor', 'descripcion', 'archivo', 'tipo', 'id_categoria', 'id_subcategoria' ];

   public function setArchivoAttribute($archivo){
     $this->attributes['archivo'] = md5(date('Y_m_d_H_i_s_')).'_'.$archivo->getClientOriginalName();
     $name = md5(date('Y_m_d_H_i_s_')).'_'.$archivo->getClientOriginalName();
     \Storage::disk('local')->put($name, \File::get($archivo));
   }

}
