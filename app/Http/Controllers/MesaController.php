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
        //
    }

       









    public function update(Request $request, Mesa $mesa)
    {
        //
    }

    







    public function destroy(Mesa $mesa)
    {
        //
    }
}
