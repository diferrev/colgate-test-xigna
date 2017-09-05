<?php

namespace Colgate\Http\Controllers\Auth;

use Colgate\User;
use Validator;
use Illuminate\Support\Facades\Auth;
use Colgate\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    /**
     * Muestra el formulario de inicio de sesión
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }
    
    /**
     * Autenticación del usuario
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        /* Valida los datos del formulario de inicio de sesión */
        $validator = Validator::make( $request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if($validator->fails()){
            return redirect()
                ->route('login_path')
                ->withInput()
                ->withErrors($validator);
        }
        
        /* Autenticación con las credenciales recibidas */
        if(Auth::attempt($request->only(['email','password'])))
        {
            /* Si la autenticación es correcta, redirecciona al Escritorio de la aplicación */
            return redirect()->route('index_path');
        }
        /* Si la autenticación es incorrecta, redirecciona al formulario de inicio de sesión con los errores */
        return redirect()->route('login_path')->withErrors('Los datos de correo o contraseña son incorrectos.');
    }

    /**
     * Cierre de sesión
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login_path');
    }
    
}
