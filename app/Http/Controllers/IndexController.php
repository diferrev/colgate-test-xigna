<?php

namespace Colgate\Http\Controllers;

use Illuminate\Http\Request;

use Colgate\Http\Requests;
use Colgate\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Muestra la vista de Bienvenida
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Obtenemos el usuario logueado */
        
        $user = Auth::user();
        return view('index')->with('user', $user);
    }
}
