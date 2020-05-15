<?php

namespace App\Http\Controllers;

use App\Factura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('administracion.facturacion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = request()->validate([
            'id' => 'required'
        ],[
            'id.required' => 'ID requerido'
        ]);

        $ordenes = DB::select('SELECT ID,Mesa,Ingredientes_Alternativos,Precio
                                FROM orden_atendidas
                                WHERE Mesa = '.$data['id'].' && Borrado = 0 && Pagado = 1 && ID_Facturacion = 0;');

        
        return view('administracion.facturacion',compact('ordenes'));
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
            'id.required' => 'Se requiere el ID',
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
            'Cantidad_Descripcion' => $data['cantidad'].' ,Descripcion: '.$data['descripcion']
        ]);

        $factura = DB::select('SELECT * FROM facturas WHERE Nombre = "'.$data['nombre'].'" && Domicilio = "'.$data['domicilio'].'" ORDER BY FechaCreacion DESC');

        $ordenes = DB::update('UPDATE orden_atendidas
                                SET ID_Facturacion = '.$factura[0]->ID.'
                                WHERE Mesa = '.$data['id'].' && Pagado = 1 && ID_Facturacion = 0');
        

        return redirect('mesas');
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
