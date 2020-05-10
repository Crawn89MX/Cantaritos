<?php

namespace App\Http\Controllers;

use App\OrdenPreparada;
use App\OrdenAtendida;
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
        $data = request()->validate([
            'idmesa' => 'required',
            'id' => 'required',
            'ingredientes' => 'required',
            'precio' => 'required'
        ],[
            'idmesa.required' => 'El ID de la mesa es requerido',
            'id.required' => 'El ID del pedido es requerido',
            'ingredientes.required' => 'Los ingredientes son requerimientos',
            'precio.required' => 'Se requieren el precio'
        ]);

        OrdenPreparada::where('ID',$data['id'])->update([
            'Borrado' => 1
        ]);
        
        OrdenAtendida::create([ 
            'Mesa' => $data['idmesa'],
            'ID_Receta' => $data['id'],
            'Ingredientes_Alternativos' => $data['ingredientes'],
            'Precio'=>$data['precio'],
            'ID_Facturacion' => '0'
        ]);

        return redirect('entregas');
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
