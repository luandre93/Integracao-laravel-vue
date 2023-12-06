<?php

namespace App\Http\Controllers;

use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $users = Usuario::all();
        return view('home', ['users' => $users]);
    
    }
}