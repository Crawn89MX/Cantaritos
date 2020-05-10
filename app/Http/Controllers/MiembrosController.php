<?php

namespace App\Http\Controllers;

use App\Miembros;
use Illuminate\Http\Request;

class MiembrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('comensales.register');
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
    public function store()
    {
        //
        //$data = request()->all();
        $data = request()validate([
            'nombre' => 'required',
            'apellidop' => 'required',
            'apellidom' => 'required',
            'correo' => 'required',
            'password' => 'required'
        ],[
            'nombre.required' => 'El nombre es requerido',
            'apellidop.required' => 'El apellido paterno es requerido',
            'apellidom.required' => 'El apellido materno es requerido',
            'correo.required' => 'Se requiere el email',
            'password.required' => 'Se requiere la contraseña',
        ])


        Miembros::create([
            'Nombre' => $data['nombre'],
            'Apellido_Pat' => $data['apellidop'],
            'Apellido_Mat' => $data['apellidom'],
            'Correo' => $data['correo'],
            'Password' => bcscrypt($data['password']),
            'Consumo' => 0,
            'Puntos_Gastados'  => 0,
        ]);

        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Miembros  $miembros
     * @return \Illuminate\Http\Response
     */
    public function show(Miembros $miembros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Miembros  $miembros
     * @return \Illuminate\Http\Response
     */
    public function edit(Miembros $miembros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Miembros  $miembros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miembros $miembros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Miembros  $miembros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miembros $miembros)
    {
        //
    }
}
