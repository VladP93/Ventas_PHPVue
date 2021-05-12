<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class Usuario extends Controller
{
    public function index()
    {
        $usuario = Usuario::all();
        return $usuario
    }
}
