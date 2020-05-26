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
    public function index()   //ESTO MUESTRA EL MENU DEL MESERO CON LAS RECETAS COMBINADAS CON LAS ORDENES PREPARADAS.
    {
        //
        $orden_Preparadas = OrdenPreparada::all()->where('Borrado',0);
        //$orden_Preparadas = OrdenPreparada::with('receta')->get();



        /*
        $orden_Preparadas = DB::select('SELECT orden_Preparadas.ID,
                                        orden_Preparadas.Mesa,
                                        orden_Preparadas.Ingredientes_Alternativos,
                                        orden_Preparadas.Precio,
                                        orden_Preparadas.ID_Receta,
                                        recetas.Imagen,
                                        recetas.Nombre,
                                        recetas.Descripcion,
                                        recetas.Costo,
                                        recetas.Clasificacion,
                                        recetas.Ingredientes,
                                        recetas.Preparacion 
                                        FROM orden_Preparadas,recetas 
                                        WHERE orden_Preparadas.ID_Receta = recetas.ID && recetas.Borrado = 0 && orden_Preparadas.Borrado = 0;');
        */


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
    public function update(Request $request, OrdenPreparada $ordenPreparada) //SE ENVIA A ORDEN_ATENDIDA CUANDO EL MESERO QUIERA.
    {
        $data = request()->validate([
            'id' => 'required',
            'idmesa' => 'required',
            'idreceta' => 'required',
            'ingredientes' => 'required',
            'precio' => 'required'
        ],[
            'id.required' => 'El ID de la mesa es requerido',
            'idmesa.required' => 'El ID de la mesa es requerido',
            'idreceta.required' => 'El ID de la receta es requerido',
            'ingredientes.required' => 'Los ingredientes son requerimientos',
            'precio.required' => 'Se requieren el precio'
        ]);

        $resp1= OrdenPreparada::where('ID',$data['id'])->update([
                    'Borrado' => 1
                ]);
                
        $resp2= OrdenAtendida::create([ 
                    'Mesa' => $data['idmesa'],
                    'ID_Receta' => $data['idreceta'],
                    'Ingredientes_Alternativos' => $data['ingredientes'],
                    'Precio'=>$data['precio'],
                    'ID_Facturacion' => '0'
                ]);

        if($resp1 && $resp2){
            toast('La orden se marco como atendida','success');
        }
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
