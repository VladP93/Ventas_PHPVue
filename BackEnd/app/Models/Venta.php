<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable =['_id', 'Cliente', 'Usuario', 'Tipo_comprobante', 
    'Num_comprobante', 'Fecha_hora', 'Impuesto', 'Total','Estado', 'Detalle_venta'];
}
