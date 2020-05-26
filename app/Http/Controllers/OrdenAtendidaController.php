<?php

namespace App\Http\Controllers;

use App\OrdenAtendida;
use Illuminate\Http\Request;

class OrdenAtendidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = request()->validate([
            'id' => 'required',
            'disponibilidad' => 'required',
            'total' => 'required',
            'ordenes' => 'required',
            'ruta' => 'required'
        ],[
            'ordenes.required' => 'Sucedio un problema, no existen ordenes'
        ]);
        

        Mesa::where('ID', $data['id'])->where('Borrado',0)
        ->update([ 
            'Disponibilidad' => $data['disponibilidad'],
            'Total' => $data['total'],
            'Ordenes' => $data['ordenes']
        ]);

        $ruta = $data['ruta'];

        //$ordenes = OrdenAtendida::all();

        $ordenes = DB::select('SELECT orden_atendidas.ID,
                                orden_atendidas.Mesa,
                                orden_atendidas.Ingredientes_Alternativos,
                                orden_atendidas.Precio,
                                recetas.Imagen,
                                recetas.Nombre,
                                recetas.Descripcion,
                                recetas.Costo,
                                recetas.Clasificacion,
                                recetas.Ingredientes,
                                recetas.Preparacion 
                                FROM orden_atendidas,recetas 
                                WHERE orden_atendidas.ID_Receta = recetas.ID && orden_atendidas.Mesa = '.$data['id'].' && recetas.Borrado = 0 && orden_atendidas.Pagado = 0;');


        return view('administracion.cuenta', compact('ruta','ordenes'));
        
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
            'id' => 'required',
            'ruta' => 'required',
            'total' => 'required'
        ],[
            'id.required' => 'ID requerido',
            'ruta,required' => 'Ruta requerida',
            'total.required' => 'Se requiere el total'
        ]);

        $cons1= DB::select('UPDATE orden_atendidas
                            SET Pagado = 1
                            WHERE Mesa = '.$data['id'].' && Pagado = 0 ');
        
        //$ordenes = OrdenAtendida::all();
        
        $ordenes = DB::select('SELECT orden_atendidas.ID,
                                    orden_atendidas.Mesa,
                                    orden_atendidas.Ingredientes_Alternativos,
                                    orden_atendidas.Precio,
                                    recetas.Imagen,
                                    recetas.Nombre,
                                    recetas.Descripcion,
                                    recetas.Costo,
                                    recetas.Clasificacion,
                                    recetas.Ingredientes,
                                    recetas.Preparacion 
                                    FROM orden_atendidas,recetas 
                                    WHERE orden_atendidas.ID_Receta = recetas.ID && orden_atendidas.Mesa = '.$data['id'].' && recetas.Borrado = 0 && orden_atendidas.Borrado = 0 && orden_atendidas.Pagado = 1 && orden_atendidas.ID_Facturacion = 0;');
        

        $cons2= DB::delete('DELETE FROM orden_pedidas WHERE Mesa = '.$data['id'].' && Borrado = 1;');

        $cons3= DB::delete('DELETE FROM orden_preparadas WHERE Mesa = '.$data['id'].' && Borrado = 1;');

        $total = $data['total'];
/*
        dd($cons2);

        if($cons1 && $cons2 && $cons3){
*/
            toast('Las ordenes fueron pagadas','success');

            if($data['ruta'] == 'mesas'){
                return redirect('mesas');
            }else{
                return view('administracion.'.$data['ruta'],compact('ordenes','total'));
            }
            /*
        }else{
            return back();
        }
        */
    }










    /**
     * Display the specified resource.
     *
     * @param  \App\Orden_Atendida  $orden_Atendida
     * @return \Illuminate\Http\Response
     */
    public function show($type)
    {
        //
        $resultado = OrdenAtendida::all();

        return view('administracion.'.$type, compact('resultado'));
    }








    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orden_Atendida  $orden_Atendida
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdenAtendida $orden_Atendida)
    {
        //
    }










    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orden_Atendida  $orden_Atendida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdenAtendida $orden_Atendida)
    {
        //
    }








    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orden_Atendida  $orden_Atendida
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenAtendida $orden_Atendida)
    {
        //
    }
}
