<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Ingreso extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'ingresos';
    protected $fillable =['_id', 'Proveedor', 'Usuario', 'Tipo_comprobante', 
    'Num_comprobante', 'Fecha_hora', 'Impuesto', 'Total', 'Estado', 'Detalle_ingreso'];
}
