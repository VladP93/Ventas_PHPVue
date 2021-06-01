<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Articulo extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'articulos';
    protected $fillable =['_id', 'Categoria', 'Codigo', 'Nombre', 
    'Precio_venta', 'Stock', 'Descripcion', 'Condicion'];
}
