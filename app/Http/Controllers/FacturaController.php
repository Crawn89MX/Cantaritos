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
        //
        $data = request()->all();
        //$data = $request;

        if(empty($data['nombre']) || empty($data['apellidop']) || empty($data['apellidom']) || empty($data['domicilio'])
        || empty($data['rfc']) || empty($data['monto']) || empty($data['condiciones']) || empty($data['metodo'])
        || empty($data['cantidad']) || empty($data['descripcion'])){
            return;
        }

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
