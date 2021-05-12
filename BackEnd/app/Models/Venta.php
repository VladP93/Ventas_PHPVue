<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Venta extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'ventas';
    protected $fillable =['_id', 'Cliente', 'Usuario', 'Tipo_comprobante', 
    'Num_comprobante', 'Fecha_hora', 'Impuesto', 'Total','Estado', 'Detalle_venta'];
}
