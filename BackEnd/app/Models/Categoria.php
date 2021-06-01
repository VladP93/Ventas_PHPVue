<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Categoria extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'categorias';
    protected $fillable =['_id', 'Nombre', 'Descripcion', 'Condicion'];
}
