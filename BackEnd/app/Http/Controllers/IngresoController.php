<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingreso;

class IngresoController extends Controller
{
    public function index(){
        $ingreso = Ingreso::all();
        return $ingreso;
    }
}