<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
   protected $table = 'comentarios';
   protected $fillable = [
		'id', 'remitente', 'correo', 'asunto', 'mensaje', 'id_user'
                         ];
}
