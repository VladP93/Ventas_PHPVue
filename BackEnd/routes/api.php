<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('/roles','App\Http\Controllers\RolController');
Route::resource('/artiulos','App\Http\Controllers\ArticuloController');
Route::resource('/categorias','App\Http\Controllers\CategoriaController');
Route::resource('/clientes','App\Http\Controllers\ClientesController');
Route::resource('/detalle_ingresos','App\Http\Controllers\Detalle_ingresoController');
Route::resource('/detalle_ventas','App\Http\Controllers\VentaController');
Route::resource('/ingresos','App\Http\Controllers\IngresoController');
Route::resource('/proveedors','App\Http\Controllers\ProveedorController');
Route::resource('/usuarios','App\Http\Controllers\UsuarioController');
Route::resource('/ventas','App\Http\Controllers\VentaController');