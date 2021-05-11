<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $fillable =['_id', 'Categoria', 'Codigo', 'Nombre', 
    'Precio_venta', 'Stock', 'Descripcion', 'Condicion'];
}
