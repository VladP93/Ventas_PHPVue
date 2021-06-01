<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Ingreso;
use App\Models\Articulo;

class IngresoController extends Controller
{
    public function index(){
        $ingreso = Ingreso::all();
        return $ingreso;
    }

    public function verDetalles($_id){
        $ingreso = Ingreso::where('_id',$_id)->first();

        $detalles = $ingreso->detalle_ingreso;
        return $detalles;
    }

    public function filtrar($texto){
        $ingreso = Ingreso::where('num_comprobante',$texto)->first();
        if($ingreso == null){
            abort(404);
        }
        return $ingreso;
    }

    public function consultarFecha($fecha_inicio, $fecha_fin){
        $ingreso = Ingreso::where('fecha_hora','>=',$fecha_inicio)->where('fecha_hora','<=',$fecha_fin)->get();
        return $ingreso;
    }

    public function store(Request $request){
        // protected $fillable =['_id', 'Proveedor', 'Usuario', 'Tipo_comprobante', 
        // 'Num_comprobante', 'Fecha_hora', 'Impuesto', 'Total', 'Estado', 'Detalle_ingreso'];

        $ingreso = new Ingreso;

        $ingreso->proveedor = $request->proveedor;
        $ingreso->usuario = $request->usuario;
        $ingreso->tipo_comprobante = $request->tipo_comprobante;
        $ingreso->num_comprobante = $request->num_comprobante;
        $fecha_hora = Carbon::now();
        $ingreso->fecha_hora = $fecha_hora->toDateTimeString();
        $ingreso->impuesto = $request->impuesto;
        $ingreso->total = number_format($request->total, 2);
        $ingreso->estado = 'Aceptado';
        $ingreso->detalle_ingreso = $request->detalle_ingreso;

        foreach ($request->detalle_ingreso as $detalle) {
            $articulo = Articulo::where('codigo',$detalle['codigo'])->first();
            $articulo->stock += $detalle['cantidad'];
            $articulo->save();
        }

        $ingreso->save();

        return response()->json(['Message'=>'Ingreso creado correctamente',$ingreso],200);
    }

    public function anular($_id){
        $ingreso = Ingreso::where('_id',$_id)->first();
        if($ingreso == null){
            abort(404);
        }

        foreach ($ingreso->detalle_ingreso as $detalle) {
            $articulo = Articulo::where('codigo',$detalle['codigo'])->first();
            $articulo->stock -= $detalle['cantidad'];
            $articulo->save();
        }

        $ingreso->estado = 'Anulado';
        $ingreso->save();

    }
}