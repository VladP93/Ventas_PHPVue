<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function index(){
        $proveedor = Proveedor::all();
        return $proveedor;
    }

    public function store(Request $request){
        // protected $fillable =['_id', 'Nombre', 'Tipo_documento', 'Num_documento',
        // 'Direccion', 'Telefono','Email'];
        $proveedor = new Proveedor;

        $proveedor->nombre = $request->nombre;
        $proveedor->tipo_documento = $request->tipo_documento;
        $proveedor->num_documento = $request->num_documento;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;

        $proveedor->save();
        return response()->json(['Message'=>'Proveedor creado correctamente',$proveedor],200);
    }

    public function update(Request $request, $id){
        $proveedor = Proveedor::where('_id',$id)->first();

        $proveedor->nombre = $request->nombre;
        $proveedor->tipo_documento = $request->tipo_documento;
        $proveedor->num_documento = $request->num_documento;
        $proveedor->direccion = $request->direccion;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;

        $proveedor->save();
        return response()->json(['Message'=>'Proveedor creado correctamente',$proveedor],200);
    }
}
