<?php

namespace App\Http\Controllers;

use App\OrdenPedida;
use App\Receta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdenPedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Eloquent
        //$ordenPedida = OrdenPedida::all();
        //$receta = Receta::all();

        $orden_Pedidas = DB::select('SELECT orden_pedidas.ID,
                                        orden_pedidas.Mesa,
                                        orden_pedidas.Ingredientes_Alternativos,
                                        orden_pedidas.Precio,
                                        recetas.Imagen,
                                        recetas.Nombre,
                                        recetas.Descripcion,
                                        recetas.Costo,
                                        recetas.Clasificacion,
                                        recetas.Ingredientes,
                                        recetas.Preparacion 
                                        FROM orden_pedidas,recetas 
                                        WHERE orden_pedidas.ID_Receta = recetas.ID && recetas.Borrado = 0 && orden_pedidas.Borrado = 0;');
        
        //dd($ordenPedida);
        //$id = $receta->id_receta;
        return view('administracion.ordenes', compact('orden_Pedidas'));
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
        $data = request()->validate([
            'idmesa' => 'required',
            'idpedido1' => 'required',
            'ingredientes1' => 'required',
            'precio' => 'required'
        ],[
            'idmesa.required' => 'El ID de la mesa es requerido',
            'idpedido1.required' => 'El ID del pedido es requerido',
            'ingredientes1.required' => 'Los ingredientes son requerimientos',
            'precio.required' => 'Se requieren el precio'
        ]);
        

        OrdenPedida::create([ 
            'Mesa' => $data['idmesa'],
            'ID_Receta' => $data['idpedido1'],
            'Ingredientes_Alternativos' => $data['ingredientes1'],
            'Precio'=>$data['precio'],
            'Preparandose'=>0
        ]);

        return redirect($data['ruta']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrdenPedida  $ordenPedida
     * @return \Illuminate\Http\Response
     */
    public function show(OrdenPedida $ordenPedida)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrdenPedida  $ordenPedida
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdenPedida $ordenPedida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrdenPedida  $ordenPedida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdenPedida $ordenPedida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrdenPedida  $ordenPedida
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenPedida $ordenPedida)
    {
        //
    }
}
