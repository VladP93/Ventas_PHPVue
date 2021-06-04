<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\Venta;

class VentaController extends Controller
{
    public function index(){
        $venta = Venta::all();
        return $venta;
    }

    public function verDetalles($_id){
        $venta = Venta::where('_id',$_id)->first();

        $detalles = $venta->detalle_venta;
        return $detalles;
    }

    public function filtrar($texto){
        $venta = Venta::where('num_comprobante',$texto)->first();
        if($venta == null){
            abort(404);
        }
        return $venta;
    }

    public function consultarFecha($fecha_inicio, $fecha_fin){
        $venta = Venta::where('fecha_hora','>=',$fecha_inicio)->where('fecha_hora','<=',$fecha_fin)->get();
        return $venta;
    }

    public function store(Request $request){
        // protected $fillable =['_id', 'Cliente', 'Usuario', 'Tipo_comprobante', 
        // 'Num_comprobante', 'Fecha_hora', 'Impuesto', 'Total','Estado', 'Detalle_venta'];
        $venta = new Venta;

        $preventa = Venta::where('num_comprobante',$request->num_comprobante)->first();

        if($preventa == null){
            $venta->cliente = $request->cliente;
            $venta->usuario = $request->usuario;
            $venta->tipo_comprobante = $request->tipo_comprobante;
            $venta->num_comprobante = $request->num_comprobante;
            $fecha_hora = Carbon::now();
            $venta->fecha_hora = $fecha_hora->toDateTimeString();
            $venta->impuesto = $request->impuesto;
            $venta->total = number_format($request->total, 2);
            $venta->estado = 'Aceptado';
            $venta->detalle_venta = $request->detalle_venta;
    
            foreach ($request->detalle_venta as $detalle) {
                $articulo = Articulo::where('codigo',$detalle['codigo'])->first();
                $articulo->stock -= $detalle['cantidad'];
                $articulo->save();
            }
    
            $venta->save();
    
            return response()->json(['Message'=>'Venta realizada correctamente',$venta],200);
        }else{
            abort(409);
        }

    }

    public function anular($_id){
        $venta = Venta::where('_id',$_id)->first();
        if($venta == null){
            abort(404);
        }

        foreach ($venta->detalle_venta as $detalle) {
            $articulo = Articulo::where('codigo',$detalle['codigo'])->first();
            $articulo->stock += $detalle['cantidad'];
            $articulo->save();
        }

        $venta->estado = 'Anulado';
        $venta->save();

    }
}
