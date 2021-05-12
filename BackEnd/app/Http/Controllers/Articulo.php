<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class Articulo extends Controller
{
    {
        $articulo = Articulo::all();
        return $articulo
    }
}
