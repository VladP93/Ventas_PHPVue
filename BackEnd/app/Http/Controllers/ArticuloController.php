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

    public function store(Request $request){
        //protected $fillable =['_id', 'Categoria', 'Codigo', 'Nombre',
        //'Precio_venta', 'Stock', 'Descripcion', 'Condicion'];
        $articulo = new Articulo;
        $articulo->categoria = $request->categoria;
        $articulo->codigo = $request->codigo;
        $articulo->nombre = $request->nombre;
        $articulo->precio_venta = $request->precio_venta;
        $articulo->stock = $request->stock;
        $articulo->descripcion = $request->descripcion;
        $articulo->condicion = 1;

        $articulo->save();
        return response()->json(['Message'=>'Articulo creado correctamente',$articulo],200);

    }

    public function update(Request $request, $id){
        $articulo = Articulo::where('_id',$id)->first();

        $articulo->categoria = $request->categoria;
        $articulo->codigo = $request->codigo;
        $articulo->nombre = $request->nombre;
        $articulo->precio_venta = $request->precio_venta;
        $articulo->stock = $request->stock;
        $articulo->descripcion = $request->descripcion;
        $articulo->condicion = 1;

        $articulo->save();
        return response()->json(['Message'=>'Articulo creado correctamente',$articulo],200);
    }

    public function desactivar(Request $request)
    {
        $articulo = Articulo::where('_id',$request->_id)->first();

        if($articulo==null){
            $articulo = new Articulo;
            return response()->json(['Message'=>'Error inesperado'],404);
        }

        $articulo->condicion = 0;
        $articulo->save();

        return response()->json(['Message'=>'Articulo desactivado',"status"=>200],200);
    }

    public function activar(Request $request)
    {
        $articulo = Articulo::where('_id',$request->_id)->first();

        if($articulo==null){
            $articulo = new Articulo;
            return response()->json(['Message'=>'Error inesperado'],404);
        }

        $articulo->condicion = 1;
        $articulo->save();

        return response()->json(['Message'=>'Articulo activado',"status"=>200],200);
    }
}
