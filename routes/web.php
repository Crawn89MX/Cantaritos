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
Route::get('/facturacion','FacturaController@index');

Route::post('/facturacion','FacturaController@create');

Route::post('/facturacion/registrar','FacturaController@store');

//inicio

Route::post('/inicio','MesaController@store');

//cobrar

Route::post('/cobrar','MesaController@update');

//receta

Route::get('/receta', function () 
{
    return view('administracion.receta');
});


//Órdenes pedidas
Route::get('/ordenes','OrdenPedidaController@index');

Route::post('/ordenes/pedida','OrdenPedidaController@store');

//Órdenes preparadas
Route::post('/ordenes/preparada','OrdenPedidaController@update');

//entregas

Route::get('/entregas','OrdenPreparadaController@index');


Route::post('/ordenes/entregada','OrdenPreparadaController@update');

<<<<<<< HEAD
=======

//Órdenes atendidas

Route::post('/cuentas/pagar','MesaController@edit');


>>>>>>> c7ca731a8dc209dcadb2cc5c63a1b9f678e0e2f9
//Usuarios
Route::get('/register','MiembrosController@index');

Route::post('/register/registro','MiembrosController@store');

//Verificación de correo
Route::get('/verificar/{correo?}', function ($correo = 'Desconocido') 
{
    return view('comensales.verificar-correo')->with(['correo' => $correo]);
});

Route::post('/verificar/verificado','MiembrosController@update');
