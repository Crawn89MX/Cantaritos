<?php

namespace App\Http\Controllers;

use App\Mesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = Mesa::all();  // en otro lado se hace la deteccion de borrado

        //dd($mesas);

        $title = 'Listado de Mesas';

        return view('comensales.index', compact('title','mesas'));
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
        //$data = request()->all();
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function show(Mesa $mesa)
    {
        $mesas = Mesa::all();  // en otro lado se hace la deteccion de borrado

        //dd($mesas);

        $title = 'Listado de Mesas';

        return view('administracion.mesas', compact('title','mesas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesa $mesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesa $mesa)
    {
        //
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

        $ordenes = $data['ordenes'];

        return redirect('facturacion', compact('ruta','ordenes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesa $mesa)
    {
        //
    }
}
