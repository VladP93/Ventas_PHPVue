<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Usuario extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'usuarios';
    protected $fillable = ['_id','Rol', 'Nombre', 'Tipo_documento', 
    'Num_documento', 'Direccion', 'Telefono', 'Email', 'Password_hash','Password_salt', 'Condicion'];
}
