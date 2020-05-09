<?php

namespace App\Http\Controllers;

use App\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administracion.facturacion');
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
            'nombre' => 'required',
            'apellidop' => 'required',
            'apellidom' => 'required',
            'domicilio' => 'required',
            'rfc' => 'required',
            'monto' => 'required',
            'condiciones' => 'required',
            'metodo' => 'required',
            'cantidad' => 'required',
            'descripcion' => 'required'
        ],[
            'nombre.index' => 'El nombre es requerido',
            'apellidop.index' => 'El apellido paterno es requerido',
            'apellidom.index' => 'El apellido materno es requerido',
            'domicilio.index' => 'El domicilio es requerido',
            'rfc.index' => 'El rfc es requerido',
            'monto.index' => 'El monto es requerido',
            'condiciones.index' => 'Las condiciones son requerido',
            'metodo.index' => 'El metodo es requerido',
            'cantidad.index' => 'La cantidad es requerida',
            'descripcion.index' => 'La descripcion es requerida'
        ]);

        Factura::create([ 
            'Nombre' => $data['nombre'],
            'Apellido_Pat' => $data['apellidop'],
            'Apellido_Mat' => $data['apellidom'],
            'Domicilio' => $data['domicilio'],
            'RFC' => $data['rfc'],
            'Monto' => $data['monto'],
            'Condiciones' => $data['condiciones'],
            'Metodo' => $data['metodo'],
            'Cantidad_Descripcion' => $data['cantidad'].$data['descripcion']
        ]);
        

        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        //
        
    }
}
