<?php

namespace App\Http\Controllers;

use App\OrdenPreparada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdenPreparadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orden_Preparadas = DB::select('SELECT orden_Preparadas.ID,
                                                orden_Preparadas.Mesa,
                                                orden_Preparadas.Ingredientes_Alternativos,
                                                orden_Preparadas.Precio,
                                                recetas.Imagen,
                                                recetas.Nombre,
                                                recetas.Descripcion,
                                                recetas.Costo,
                                                recetas.Clasificacion,
                                                recetas.Ingredientes,
                                                recetas.Preparacion 
                                                FROM orden_Preparadas,recetas 
                                                WHERE orden_Preparadas.ID_Receta = recetas.ID && recetas.Borrado = 0 && orden_Preparadas.Borrado = 0;');

        //dd($ordenPedida);
        //$id = $receta->id_receta;
        return view('administracion.entregas', compact('orden_Preparadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\OrdenPreparada  $ordenPreparada
     * @return \Illuminate\Http\Response
     */
    public function show(OrdenPreparada $ordenPreparada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrdenPreparada  $ordenPreparada
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdenPreparada $ordenPreparada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrdenPreparada  $ordenPreparada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdenPreparada $ordenPreparada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrdenPreparada  $ordenPreparada
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenPreparada $ordenPreparada)
    {
        //
    }
}
