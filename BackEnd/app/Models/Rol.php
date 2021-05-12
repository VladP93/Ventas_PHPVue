<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Rol extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'rols';
    protected $fillable =['_id', 'Nombre', 'Descripcion', 'Condicion'];
}
