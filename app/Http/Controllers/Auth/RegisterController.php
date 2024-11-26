<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    public function showRegistrationForm()
    {
        // return view('auth.login');
        return view('auth.register');
    }

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
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clientes'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'identificacion' => ['required', 'string', 'max:20'], // Único en la tabla 'cliente'
            'telefono' => ['required', 'string', 'max:15'],
            'direccion' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Cliente
     */
    protected function create(array $data)
    {
        return Cliente::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'identificacion' => $data['identificacion'],
            'telefono' => $data['telefono'],
            'direccion' => $data['direccion'],
        ])->assignRole('cliente');
    
    }
}
