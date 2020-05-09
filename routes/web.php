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

Route::get('/', function () 
{
    return view('comensales.index');
});

Route::get('/menu', 'RecetaController@index');

Route::get('/mesas', 'MesaController@index');

//Facturación
Route::get('/facturacion','FacturaController@create');

Route::post('/facturacion/registrar','FacturaController@store');

Route::post('/inicio','MesaController@store');

Route::get('/receta', function () 
{
    return view('administracion.receta');
});

//Órdenes pedidas
Route::get('/ordenes','OrdenPedidaController@index');

Route::post('/ordenes/pedida','OrdenPedidaController@store');

Route::get('/entregas','OrdenPreparadaController@index');

//Órdenes atendidas

Route::get('/login', function () 
{
    return view('comensales.login');
});

Route::get('/register', function () 
{
    return view('comensales.register');
});