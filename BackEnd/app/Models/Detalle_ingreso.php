<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Detalle_ingreso extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'detalle_ingresos';
    protected $fillable =['_id', 'Articulo', 'Cantidad', 'Precio'];
}
