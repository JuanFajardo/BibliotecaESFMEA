<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //'name', 'email', 'password', 'log', 'salud', 'grupo'
        'password', 'name', 'email', 'ci', 'ap_paterno', 'ap_materno', 'nombres', 'nivel', 'paralelo', 'especialidad', 'reg_estudiante', 'activo', 'grupo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
