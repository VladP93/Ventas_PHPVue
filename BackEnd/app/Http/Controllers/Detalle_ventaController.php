<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle_venta;

class Detalle_ventaController extends Controller
{
    public function index(){
        $detalle_venta = Detalle_venta::all();
        return $detalle_venta;
    }
}
