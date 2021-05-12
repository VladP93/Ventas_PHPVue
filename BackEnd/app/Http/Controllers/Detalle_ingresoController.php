<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle_ingreso;

class Detalle_ingresoController extends Controller
{
    public function index(){
        $detalle_ingreso = Detalle_ingreso::all();
        return $detalle_ingreso;
    }
}
