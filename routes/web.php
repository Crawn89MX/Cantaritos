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

Route::get('/facturacion','FacturaController@index');

Route::get('/cuenta', function () 
{
    return view('administracion.cuenta');
});

Route::get('/', function () 
{
    return view('administracion.index');
});

Route::get('/menu', function () 
{
    return view('administracion.menu');
});

Route::get('/mesas', 'MesaController@index');

/*
Route::get('/mesas', function () 
{
    return view('administracion.mesas');
});
*/

Route::get('/ordenes', function () 
{
    return view('administracion.ordenes');
});

Route::get('/login', function () 
{
    return view('administracion.login');
});