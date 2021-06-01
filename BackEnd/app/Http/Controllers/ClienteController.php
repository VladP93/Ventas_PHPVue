<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $cliente = Cliente::all();
        return $cliente;
    }

    public function store(Request $request){
        // protected $fillable =['_id', 'Nombre', 'Tipo_documento', 'Num_documento', 
        // 'Direccion', 'Telefono', 'Email'];

        $cliente = new Cliente;

        $cliente->nombre = $request->nombre;
        $cliente->tipo_documento = $request->tipo_documento;
        $cliente->num_documento = $request->num_documento;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;

        $cliente->save();
        return response()->json(['Message'=>'Cliente creado correctamente',$cliente],200);
    }

    public function update(Request $request, $id){
        $cliente = Cliente::where('_id',$id)->first();

        $cliente->nombre = $request->nombre;
        $cliente->tipo_documento = $request->tipo_documento;
        $cliente->num_documento = $request->num_documento;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;

        $cliente->save();
        return response()->json(['Message'=>'Cliente creado correctamente',$cliente],200);
    }
}