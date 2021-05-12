<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Cliente extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'clientes';
    protected $fillable =['_id', 'Nombre', 'Tipo_documento', 'Num_documento', 
    'Direccion', 'Telefono', 'Email'];
}
