<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class Venta extends Controller
{
    public function index()
    {
        $venta = Venta::all();
        return $venta
    }
}
