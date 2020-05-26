<?php

namespace App\Http\Controllers;

Use Alert;
use App\OrdenPedida;
use App\OrdenPreparada;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Support\Facades\DB;


class OrdenPedidaController extends Controller
{








    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()   // ESTO MUESTRA EL MENU DEL CHEF CON LAS RECETAS COMBINADAS CON PEDIDOS
    {
        
        $orden_Pedidas = OrdenPedida::all()->where('Borrado',0);
        //$orden_Pedidas = OrdenPedida::with('receta')->get();


        //Consulta para griselda
        /*
        $orden_Pedidas = DB::select('SELECT orden_pedidas.ID,
                                        orden_pedidas.ID_Receta,
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
        */
        
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
    public function store(Request $request) // SE ENVIA A ORDEN_PEDIDA CUANDO EL COMENSAL QUIERA.
    {
        $numordenes = OrdenPedida::all()->where('Borrado', 0);

        if(count($numordenes) > 30){
            toast('Estamos actualmente ocupados, porfavor intentelo en un momento','warning');
            return redirect('menu');
        }


        $data = request()->validate([
            'idmesa' => 'required',
            'idpedido1' => 'required',
            'ingredientes1' => 'required',
            'precio1' => 'required'
        ],[
            'idmesa.required' => 'El ID de la mesa es requerido',
            'idpedido1.required' => 'El ID del pedido es requerido',
            'ingredientes1.required' => 'Los ingredientes son requerimientos',
            'precio1.required' => 'Se requieren el precio'
        ]);
        
        //Eloquents
        OrdenPedida::create([ 
            'Mesa' => $data['idmesa'],
            'ID_Receta' => $data['idpedido1'],
            'Ingredientes_Alternativos' => $data['ingredientes1'],
            'Precio'=>$data['precio1'],
            'Preparandose'=>0
        ]);

        toast('Tu orden ha sido enviada','success');
        return redirect('menu');
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
    public function update(Request $request, OrdenPedida $ordenPedida)   // ENVIA A ORDEN_PREPARADA CUANDO EL CHEF DECIDA
    {
        $data = request()->validate([
            'idmesa' => 'required',
            'id' => 'required',
            'idreceta' => 'required',
            'ingredientes' => 'required',
            'precio' => 'required'
        ],[
            'idmesa.required' => 'El ID de la mesa es requerido',
            'id.required' => 'El ID del pedido es requerido',
            'idreceta.required' => 'Se require el id de la receta',
            'ingredientes.required' => 'Los ingredientes son requerimientos',
            'precio.required' => 'Se requieren el precio'
        ]);

        $resp1= OrdenPedida::where('ID',$data['id'])->update([
                    'Borrado' => 1
                ]);
        
        $resp2= OrdenPreparada::create([ 
                    'Mesa' => $data['idmesa'],
                    'ID_Receta' => $data['idreceta'],
                    'Ingredientes_Alternativos' => $data['ingredientes'],
                    'Precio'=>$data['precio']
                ]);


        if($resp1 && $resp2){
            toast('La orden se marco como preparada','success');
        }
        return redirect('ordenes');
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
