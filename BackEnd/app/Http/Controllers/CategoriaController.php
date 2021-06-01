<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){
        $categoria = Categoria::all();
        return $categoria;
    }

    public function store(Request $request){
        $categoria = new Categoria;
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->condicion = 1;

        $categoria->save();
        return response()->json(['Message'=>'Categoría creada correctamente',$categoria],200);
    }

    public function update(Request $request, $id){
        $categoria = Categoria::where('_id',$id)->first();

        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->condicion = 1;

        $categoria->save();
        return response()->json(['Message'=>'Categoria editada correctamente',$categoria],200);
    }

    public function desactivar(Request $request)
    {
        $categoria = Categoria::where('_id',$request->_id)->first();

        if($categoria==null){
            $categoria = new Categoria;
            return response()->json(['Message'=>'Error inesperado'],404);
        }

        $categoria->condicion = 0;
        $categoria->save();

        return response()->json(['Message'=>'Categoria desactivada',"status"=>200],200);
    }

    public function activar(Request $request)
    {
        $categoria = Categoria::where('_id',$request->_id)->first();

        if($categoria==null){
            $categoria = new Categoria;
            return response()->json(['Message'=>'Error inesperado'],404);
        }

        $categoria->condicion = 1;
        $categoria->save();

        return response()->json(['Message'=>'Categoria activada',"status"=>200],200);
    }
}
