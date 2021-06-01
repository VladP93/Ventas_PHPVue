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

// http://host:puerto/api/[Controller]

Route::resource('/Roles','App\Http\Controllers\RolController');
Route::resource('/Articulos','App\Http\Controllers\ArticuloController');
Route::put('/Articulos/Desactivar/{_id}','App\Http\Controllers\ArticuloController@desactivar');
Route::put('/Articulos/Activar/{_id}','App\Http\Controllers\ArticuloController@activar');
Route::resource('/Categorias','App\Http\Controllers\CategoriaController');
Route::put('/Categorias/Desactivar/{_id}','App\Http\Controllers\CategoriaController@desactivar');
Route::put('/Categorias/Activar/{_id}','App\Http\Controllers\CategoriaController@activar');
Route::resource('/Clientes','App\Http\Controllers\ClienteController');
Route::resource('/Detalle_ingresos','App\Http\Controllers\Detalle_ingresoController');
Route::resource('/Detalle_ventas','App\Http\Controllers\VentaController');
Route::resource('/Ingresos','App\Http\Controllers\IngresoController');
Route::resource('/Proveedores','App\Http\Controllers\ProveedorController');
Route::resource('/Usuarios','App\Http\Controllers\UsuarioController');
Route::post('/Usuarios/Login','App\Http\Controllers\UsuarioController@login');
Route::put('/Usuarios/Desactivar/{_id}','App\Http\Controllers\UsuarioController@desactivar');
Route::put('/Usuarios/Activar/{_id}','App\Http\Controllers\UsuarioController@activar');
Route::resource('/Ventas','App\Http\Controllers\VentaController');