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
Route::get('/Articulos/Codigo/{codigo}','App\Http\Controllers\ArticuloController@buscarCodigo');
Route::get('/Articulos/Buscar/{texto}','App\Http\Controllers\ArticuloController@buscarTexto');
Route::put('/Articulos/Desactivar/{_id}','App\Http\Controllers\ArticuloController@desactivar');
Route::put('/Articulos/Activar/{_id}','App\Http\Controllers\ArticuloController@activar');
Route::resource('/Categorias','App\Http\Controllers\CategoriaController');
Route::put('/Categorias/Desactivar/{_id}','App\Http\Controllers\CategoriaController@desactivar');
Route::put('/Categorias/Activar/{_id}','App\Http\Controllers\CategoriaController@activar');
Route::resource('/Clientes','App\Http\Controllers\ClienteController');
Route::resource('/Detalle_ingresos','App\Http\Controllers\Detalle_ingresoController');
Route::resource('/Detalle_ventas','App\Http\Controllers\VentaController');
Route::resource('/Ingresos','App\Http\Controllers\IngresoController');
Route::get('Ingresos/Detalles/{_id}','App\Http\Controllers\IngresoController@verDetalles');
Route::get('Ingresos/ConsultaFechas/{fecha_inicio}/{fecha_fin}','App\Http\Controllers\IngresoController@consultarFecha');
Route::put('Ingresos/Anular/{_id}','App\Http\Controllers\IngresoController@anular');
Route::get('Ingresos/Filtrar/{texto}','App\Http\Controllers\IngresoController@filtrar');
Route::resource('/Proveedores','App\Http\Controllers\ProveedorController');
Route::resource('/Usuarios','App\Http\Controllers\UsuarioController');
Route::post('/Usuarios/Login','App\Http\Controllers\UsuarioController@login');
Route::put('/Usuarios/Desactivar/{_id}','App\Http\Controllers\UsuarioController@desactivar');
Route::put('/Usuarios/Activar/{_id}','App\Http\Controllers\UsuarioController@activar');
Route::resource('/Ventas','App\Http\Controllers\VentaController');
Route::get('Ventas/Detalles/{_id}','App\Http\Controllers\VentaController@verDetalles');
Route::get('Ventas/ConsultaFechas/{fecha_inicio}/{fecha_fin}','App\Http\Controllers\VentaController@consultarFecha');
Route::put('Ventas/Anular/{_id}','App\Http\Controllers\VentaController@anular');
Route::get('Ventas/Filtrar/{texto}','App\Http\Controllers\VentaController@filtrar');