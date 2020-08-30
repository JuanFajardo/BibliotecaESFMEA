<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255|unique:users',
            //'email' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'ci' => 'required|string|max:255',
            'ap_paterno' => 'required|string|max:255',
            'ap_materno' => 'required|string|max:255',
            'nombres' => 'required|string|max:255',
            'nivel' => 'required|string|max:255',
            'paralelo' => 'required|string|max:255',
            'especialidad' => 'required|string|max:255',
            'reg_estudiante' => 'required|string|max:255',
            'activo' => 'required|string|max:255',
            'grupo' => 'required|string|max:255'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'    => $data['name'],
            'email'   => $data['email'],
            'ci'      => $data['ci'],
            'ap_paterno'=> $data['ap_paterno'],
            'ap_materno'=> $data['ap_materno'],
            'nombres' => $data['nombres'],
            'nivel'   => $data['nivel'],
            'paralelo'=> $data['paralelo'],
            'especialidad'  => $data['especialidad'],
            'reg_estudiante'=> $data['reg_estudiante'],
            'activo' => $data['activo'],
            'grupo'  => $data['grupo'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
