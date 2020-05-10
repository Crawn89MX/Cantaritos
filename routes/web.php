<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/cuenta', function () 
{
    return view('administracion.cuenta');
});

Route::get('/','MesaController@index');

Route::get('/menu', 'RecetaController@show');

Route::get('/mesas', 'MesaController@show');


//Facturación
Route::get('/facturacion','FacturaController@create');

Route::post('/facturacion/registrar','FacturaController@store');

Route::post('/inicio','MesaController@store');

Route::post('/cobrar','MesaController@update');

Route::get('/receta', function () 
{
    return view('administracion.receta');
});


//Órdenes pedidas
Route::get('/ordenes','OrdenPedidaController@index');

Route::post('/ordenes/pedida','OrdenPedidaController@store');

Route::post('/ordenes/preparada','OrdenPedidaController@update');

Route::get('/entregas','OrdenPreparadaController@index');

//Órdenes preparadas

Route::post('/ordenes/entregada','OrdenPreparadaController@update');


//Órdenes atendidas

//Usuarios
Route::get('/register','MiembrosController@index');

Route::post('/register/registro','MiembrosController@store');