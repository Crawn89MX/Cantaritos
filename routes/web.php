<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;



//--------------------------------------------COMENSALES------------------------

Route::get('/cuenta', function () 
{
    return view('administracion.cuenta');
});

Route::get('/','MesaController@index');

Route::post('/inicio','MesaController@store');

//Menu
Route::get('/menu', 'RecetaController@show');

//Receta
Route::get('/receta/nuevo', 'RecetaController@create');

Route::post('/receta/crear', 'RecetaController@store');


//Miembros
Route::get('/registeruser','MiembrosController@index');

Route::post('/register/registro','MiembrosController@store');

//Verificación de correo
Route::get('/verificar/{correo?}', function ($correo = 'Desconocido') 
{
    return view('comensales.verificar-correo')->with(['correo' => $correo]);
});

Route::post('/verificar/verificado','MiembrosController@update');

Route::get('/logout', function () 
{
    return view('comensales.logout');
});








//---------------------------------------------------ADMINISTRACION---------------------


Route::group(['middleware' => 'auth'], function(){


    
        //Mesas
        Route::get('/mesas', 'MesaController@show');


        //Facturación
        Route::get('/facturacion','FacturaController@index');

        Route::post('/facturacion','FacturaController@create');

        Route::post('/facturacion/registrar','FacturaController@store');


        //cobrar
        Route::post('/cobrar','OrdenAtendidaController@index');

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

        //Ordenes Entragadas

        Route::post('/ordenes/entregada','OrdenPreparadaController@update');

        //Pagar la cuenta
        Route::post('/cuentas/pagar','OrdenAtendidaController@Store');

        //entregas(Meseros)
        Route::get('/entregas','OrdenPreparadaController@index');

        //reporte de excel
        Route::get('/reporte',function()
        {
            return view('administracion.excel');
        });


        //ruta de prueba
        Route::get('/laravel',function()
        {
            toast('Success Toast','success');
            return view('welcome');
        });

        Route::post('/registered','UserController@create');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
