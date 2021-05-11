<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;
    protected $fillable =['_id', 'Proveedor', 'Usuario', 'Tipo_comprobante', 
    'Num_comprobante', 'Fecha_hora', 'Impuesto', 'Total', 'Estado', 'Detalle_ingreso'];
}
