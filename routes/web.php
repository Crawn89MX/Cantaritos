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


//Miembros
Route::get('/registeruser','MiembrosController@index');

Route::post('/register/registro','MiembrosController@store');

//Verificación de correo
Route::get('/verificar/{correo?}', function ($correo = 'Desconocido') 
{
    return view('comensales.verificar-correo')->with(['correo' => $correo]);
});

Route::post('/verificar/verificado','MiembrosController@update');

Route::get('/salir', function () 
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


        //Receta
        Route::get('/receta/registrar', 'RecetaController@create');

        Route::post('/receta/register', [
            'as' => 'receta.store',
            'uses' => 'RecetaController@store',
        ]);

        Route::get('/receta/editar', 'RecetaController@edit');

        Route::post('/receta/updater', [
            'as' => 'receta.update',
            'uses' => 'RecetaController@update',
        ]);

        Route::get('/receta/{ID?}', [
            'as' => 'receta',
            'uses' => 'RecetaController@recipe',
        ]);


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

        Route::get('/reporte',function()
        {
            return view('administracion.reporte');
        });

        //reporte de excel o api
        Route::get('/reporte/{type?}',[
            'as' => 'reporte',
            'uses' => 'OrdenAtendidaController@show',
            ]);


        Route::get('/registrar',function()
        {
            return view('administracion.registrar');
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
