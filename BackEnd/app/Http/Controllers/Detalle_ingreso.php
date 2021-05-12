<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalle_ingreso

class Detalle_ingreso extends Controller
{
    {
        $detalle_ingreso = Detalle_ingreso::all();
        return $detalle_ingreso
    }
}
