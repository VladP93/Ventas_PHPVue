<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Detalle_venta extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'detalle_ventas';
    protected $fillable =['_id', 'Articulo', 'Cantidad','Precio', 'Descuento'];
}
