<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function index(){
        $articulo = Articulo::all();
        return $articulo;
    }
}
