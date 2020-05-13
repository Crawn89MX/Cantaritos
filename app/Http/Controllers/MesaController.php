<?php

namespace App\Http\Controllers;

use App\Mesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MesaController extends Controller
{
    











    public function index()
    {
        $mesas = Mesa::all();  // en otro lado se hace la deteccion de borrado

        

        $title = 'Listado de Mesas';

        return view('comensales.index', compact('title','mesas'));
    }

    









    public function create()
    {
        //
    }

     










    public function store(Request $request)
    {
        
        $data = request()->validate([
            'id' => 'required',
            'disponibilidad' => 'required',
            'total' => 'required',
            'ordenes' => 'required',
            'ruta' => 'required'
        ],[
            'id.required' => 'El ID es requerido',
            'disponibilidad.required' => 'Se requiere la disponibilidad',
            'total.required' => 'El total es requerido',
            'ordenes.required' => 'Se requieren las ordenes',
            'ruta.required' => 'Se requieren la ruta'
        ]);
        



        Mesa::where('ID', $data['id'])->where('Borrado',0)->update([ 
            'Disponibilidad' => $data['disponibilidad'],
            'Total' => $data['total'],
            'Ordenes' => $data['ordenes']
        ]);



        return redirect($data['ruta']);
    }

    







    public function show(Mesa $mesa)
    {
        $mesas = Mesa::all();  // en otro lado se hace la deteccion de borrado

        $title = 'Listado de Mesas';

        return view('administracion.mesas', compact('title','mesas'));
    }

    








    public function edit(Mesa $mesa)
    {
        $data = request()->validate([
            'id' => 'required',
            'ruta' => 'required'
        ],[
            'id.required' => 'ID requerido',
            'ruta,required' => 'Ruta requerida'
        ]);

        DB::select('UPDATE orden_atendidas
                    SET Pagado = 1
                    WHERE Mesa = '.$data['id'].' && Pagado = 0 ');
                  
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
                                    WHERE orden_atendidas.ID_Receta = recetas.ID && orden_atendidas.Mesa = '.$data['id'].' && recetas.Borrado = 0 && orden_atendidas .Borrado = 0;');

       DB::delete('DELETE FROM orden_pedidas WHERE Mesa = '.$data['id'].' && Borrado = 1;');

        DB::delete('DELETE FROM orden_preparadas WHERE Mesa = '.$data['id'].' && Borrado = 1;');


        if($data['ruta'] == 'mesas'){
            return redirect('mesas');
        }else{
            return view('administracion.'.$data['ruta'],compact('ordenes'));
        }
    }

       









    public function update(Request $request, Mesa $mesa)
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
        

        Mesa::where('ID', $data['id'])->where('Borrado',0)->update([ 
            'Disponibilidad' => $data['disponibilidad'],
            'Total' => $data['total'],
            'Ordenes' => $data['ordenes']
        ]);

        $ruta = $data['ruta'];

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

    







    public function destroy(Mesa $mesa)
    {
        //
    }
}
