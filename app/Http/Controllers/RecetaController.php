<?php

namespace App\Http\Controllers;

use App\Receta;
use App\Mesa;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Consultas de Laravel
        //$recetas = DB::table('recetas')->get();
        //dd($recetas);

        //Eloquent
        $recetas = Receta::all();
        return view('comensales.menu', compact('recetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administracion.receta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $receta)
    {   
        // Consultas de Laravel
        //$recetas = DB::table('recetas')->get();  // la forma de laravel
        //dd($recetas);
        
        //Eloquent
        $recetas = Receta::all();   // la forma de eloquent
        $cuentas = Mesa::all();
        $title = 'Listado de Recetas';  // es solo un titulo para la pagina
        return view('comensales.menu', compact('title','cuentas','recetas')); // puedes pasar mas de un parametro pero tu sabes como rescatarlo
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receta $receta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        //
    }
}
