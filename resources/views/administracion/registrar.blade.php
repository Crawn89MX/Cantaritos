@extends('layouts.app')

@section('content')
<style>
	.btn-primary
	{
		font-family: 'Arial';
	}
	.navbar-light
	{
		background-image: url("{{asset ("Images/background.jpg")}}");
		background-size: cover;
		background-position: 0px -280px;
	}
	.navbar-item>div>a
	{
		color: white;
	}
	.navbar-brand-principal
	{
		color: white;
		margin-top: 25px;
	}
	.navbar-dark
	{
		background-color: black !important;
	}
	body
	{
		background-image: url("{{asset("Images/background2.png")}}");
		background-size: cover;
	}
	.contenido
	{
		background-color: white;
	}
	.margenes
	{
		padding-left: 30%;
		padding-right: 30%;
	}
	.titulo
	{
		padding-bottom: 0px;
		font-family: 'proxima-nova' !important;
	}
	.subtitulo
	{
		font-family: 'brillotusregular' !important;
	}
	.card
	{
		box-shadow: 2px 2px 5px #999;
	}

</style>
<?php

    if(auth()->user()->puesto != 'admin'){
        
        echo '<center><h1 style="color:white;">Tu no tienes permisos</h1></center>';
        echo'<script>
                $(document).ready(function(){
                    $(".container").remove();
                });
            </script>';
    }
?>
    <div style="color:white; padding-top:150px;" class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <center>
                    <a href="/register">
                    <i class="fas fa-user" style="font-size:150px;"></i>
                    <h3>Registar Usuario</h3>
                    </a>
                </center>
            </div>
            <div class="col-12 col-md-6">
                <center>
                    <a href="/receta/registrar">
                        <i class="fas fa-hamburger"  style="font-size:150px;"></i>
                        <h3>Registrar Receta<h3>
                    </a>
                </center>
            </div>
        </div>
    </div>

@endsection