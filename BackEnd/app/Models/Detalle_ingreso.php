<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_ingreso extends Model
{
    use HasFactory;
    protected $fillable =['_id', 'Articulo', 'Cantidad', 'Precio'];
}
