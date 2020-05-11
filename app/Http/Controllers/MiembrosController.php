<?php

namespace App\Http\Controllers;

use App\Miembros;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
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

    //Para enviar la información del formulario de registro de usuarios a la BD
    public function store()
    {
        //$data = request()->all();
        $data = request()->validate([
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
            'password.required' => 'Se requiere la contraseña'
        ]);

        Miembros::create([
            'Nombre' => $data['nombre'],
            'Apellido_Pat' => $data['apellidop'],
            'Apellido_Mat' => $data['apellidom'],
            'Correo' => $data['correo'],
            'Password' => $data['password'],
            'Consumo' => '0',
            'Puntos_Gastados'  => '0'
        ]);

        //Enviar correo
        $url = 'cantaritos.test/verificar';

        $mail = new PHPMailer(true);
    try{
        $mail->CharSet = "utf-8"; // set charset to utf8
        $mail->setFrom('cantaritos2021@gmail.com','Cantaritos');
        $mail->addReplyTo('cantaritos2021@gmail.com','Cantaritos');
        $mail->Subject = "Por favor verifique su direccion de correo electronico";
        $mail->addAddress($data['correo'],'Correo Usuario');
        $mail->SMTPAuth = true;  // use smpt auth
        $mail->SMTPSecure = "tls"; // or ssl
        $mail->MsgHTML('<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom: 40px;">
        <center>
            <img src="" style="padding: 20px; width:10%;">
        </center>
        
            <div style="position: relative; margin: auto; width: 600px; background: white; padding: 20px;">
                <center>
                    <img src="https://tutorialesatualcance.com/tienda/icon-email.png" style="padding:20px; width: 15%;">
                    <h3 style="font-weight:100; color: #999;">VERIFIQUE SU DIRECCIÓN DE CORREO ELECTRÓNICO</h3>
                    <hr style="border:1px solid #ccc width:80%;">
                    <h4 style="font-weight: 100; color: #999; padding: 0px 20px;">Para comenzar a usar su cuenta de Cantaritos, Debe confirmar su dirección de correo electrónico</h4>

                    <a href="'.$url.''.md5($data['correo']).
                    '" target="_blank" style="text-decoration: none;">
                        <div style="line-height:60px; background: #428BCA; width:60%; color: white; ">Verifique su dirección de correo electrónico</div>
                    </a>
                    <br>
                    <hr style="border:1px solid #ccc width:80%;">
                    <h5>Si no se inscribió en esta cuenta, puede ignorar este correo electrónico y la cuenta se eliminirá</h5>
                </center>
            </div>
        </div>');
        $mail->send();
    }catch(phpmailerException $e){
        dd($e);
    }catch(Exception $e){
        dd($e);
    }
    die('success');


        


        return redirect('/');
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
