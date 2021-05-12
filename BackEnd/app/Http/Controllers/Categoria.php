<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class Categoria extends Controller
{
    {
        $categoria = Categoria::all();
        return $categoria
    }
}
