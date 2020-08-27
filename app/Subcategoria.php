<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
   protected $table = 'subcategorias';
   protected $fillable = [
		'id', 'nombre_subcategoria', 'id_categoria'
                         ];
}
