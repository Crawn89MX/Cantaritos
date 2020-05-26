<?php

namespace App\Http\Controllers;

use App\Receta;
use App\Mesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RecetaController extends Controller
{








    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Consultas de Laravel
        //$recetas = DB::table('recetas')->get();
        //dd($recetas);

        //Eloquent
        $recetas = Receta::all();
        return view('comensales.menu', compact('recetas'));
    }











    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administracion.NewReceta');
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
            'platillo' => 'required',
            'costo' => 'required',
            'descripcion' => 'required',
            'ingrediente' => 'required',
            'paso' => 'required',
            'foto' => 'required',
            'clasificacion' => 'required',
            'condimento' => 'required'
        ],[
            'platillo.required' => 'El platilo es requerido',
            'costo.required' => 'El costo es requerido',
            'descripcion.required' => 'La descripcion es requerido',
            'ingredientes.required' => 'Los ingredientes son requeridos',
            'paso.required' => 'Se requieren los pasos',
            'foto.required' => 'Se requiere de la foto'
        ]);

        if($archivo=$request->file('foto')){
            $nombre = $archivo->getClientOriginalName();    
            $archivo->move('Images', $nombre);
            $data['foto']=$nombre;
        }
        
        $resp = Receta::create([ 
            'Imagen' => $data['foto'],
            'Nombre' => $data['platillo'],
            'Descripcion' => $data['descripcion'],
            'Costo' => $data['costo'],
            'Clasificacion' => $data['clasificacion'],
            'Ingredientes' => $data['ingrediente'],
            'Preparacion' => $data['paso'],
            'Condimentos_Alternativos' => $data['condimento']
        ]);

        //
        return redirect('receta/registrar');
    }










    /**
     * Display the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $receta)
    {   
        // Consultas de Laravel
        //$recetas = DB::table('recetas')->get();  // la forma de laravel
        //dd($recetas);
        
        //Eloquent
        $recetas = Receta::all();   // la forma de eloquent
        $cuentas = Mesa::all();
        $title = 'Listado de Recetas';  // es solo un titulo para la pagina
        return view('comensales.menu', compact('title','cuentas','recetas')); // puedes pasar mas de un parametro pero tu sabes como rescatarlo
    }









    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta)
    {
        //
        return view('administracion.ModReceta');
    }










    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receta $receta)
    {
        /*
        $data = request()->validate([
            'id' => 'required',
            'platillo' => 'required',
            'costo' => 'required',
            'descripcion' => 'required',
            'ingrediente' => 'required',
            'paso' => 'required',
            'foto' => 'required',
            'clasificacion' => 'required',
            'condimento' => 'required'
        ],[
            'id.required' => 'Se requiere el id',
            'platillo.required' => 'El platilo es requerido',
            'costo.required' => 'El costo es requerido',
            'descripcion.required' => 'La descripcion es requerido',
            'ingredientes.required' => 'Los ingredientes son requeridos',
            'paso.required' => 'Se requieren los pasos',
            'foto.required' => 'Se requiere de la foto'
        ]);

        $recetaAntigua = Receta::find($data['id']);

        if($request->file('foto')){
            //borrar la imagen
            Storage::disk('public')->delete($recetaAntigua['Imagen']);

            $ruta = Storage::disk('public')->put('Images', $request->file('foto'));
            $data->fill(['foto' => $ruta])->save();
        }

        $resp2= Receta::create([ 
            'Imagen' => $data['foto'],
            'Nombre' => $data['platillo'],
            'Descripcion' => $data['descripcion'],
            'Costo' => $data['costo'],
            'Clasificacion' => $data['clasificacion'],
            'Ingredientes' => $data['ingrediente'],
            'Preparacion' => $data['paso'],
            'Condimentos_Alternativos' => $data['condimento']
        ]);

        //
        return redirect('receta/editar');
            */
    }







    public function recipe($ID)
    {
        //

        $receta = Receta::all()->where('ID',$ID);

        return view('administracion/receta',compact('receta'));
    }








    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        //
    }
}
