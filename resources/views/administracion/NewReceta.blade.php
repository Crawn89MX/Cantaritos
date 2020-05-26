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
	::placeholder { color: #999 !important; }
</style>
	<script>
		$(document).ready(function(){
			$(".btnFoto").click(function(){
				document.getElementById("fotoComida").click();
			});
		});
	</script>
	<?php
	if(auth()->user()->puesto != 'admin'){
		
		echo '<center><h1 style="color:black;">Tu no tienes permisos</h1></center>';
		echo'<script>
                $(document).ready(function(){
                    $(".contenidos").remove();
                });
            </script>';
	}
	?>

<div class="contenidos">

	<div class="row text-center">
		<div class="col-12">
			<!--
			<div class="btn-group btn-group-lg" role="group">
				<a href="/receta/registrar" type="button" class="btn btn-outline-secondary">Borrar</a>
				<a href="/receta/editar/" type="button" class="btn btn-outline-secondary">Registrar</a>
			</div>
		-->
		</div>
	</div>

	<br>


	<div class="margenes">
	<div class="container contenido">
		<div class="titulo">
			<br>
				<h2>Registro</h2>
				<hr>
		</div>

	

	<!-- Formulario -->
	<div class="container">
	{!! Form::open(['route' => 'receta.store', 'files' => 'true']) !!}
	@csrf
	
		<div class="row form-group contact100-form">
			
				<div class="col-md-12">
					<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
						<!--<span class="label-input100">Nombre del platillo</span>-->
						<input class="input100" type="text" name="platillo" placeholder="Nombre del platillo">
						<span class="focus-input100"></span>
					</div>
				</div>
        		<div class="col-md-4">
					<div class="col-md-12">
					<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
						<!--<span class="label-input100">Foto</span>-->
						<div class="btnFoto">
							<i style="font-size:80px;" class="far fa-image"></i>
						</div>
							<input type="file" name="foto" id="fotoComida" hidden>
							
						
						<span class="focus-input100"></span>
					</div>
					</div>
					<div class="col-md-12">
						<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
							<!--<span class="label-input100">Costo</span>-->
							<input class="input100" type="text" name="costo" placeholder="Costo $">
							<span class="focus-input100"></span>
						</div>
					</div>
					<div class="col-md-12">
						<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
							<!--<span class="label-input100">Costo</span>-->
							<input class="input100" type="text" name="clasificacion" placeholder="Tipo">
							<span class="focus-input100"></span>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
						<!--<span class="label-input100">Descripción</span>-->
						<textarea class="input100" type="text" name="descripcion" style="height: 210px !important" placeholder="Descripcion"></textarea>
						<span class="focus-input100"></span>
					</div>
				</div>

				<div class="col-md-12">
				<center>
					<div class="titulo" style="padding-bottom: 15px !important">
						<br>
							<h3>Ingredientes</h3>
					</div>
				</center>
				</div>
				<br><br>
				<div class="col-md-12">
					<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
						<!--<span class="label-input100">Ingrediente</span>-->
						<input class="input100" type="text" name="ingrediente" placeholder='Ingredientes(Json) &#09;&#09;EJ: {"1":"Ingrediente"} '>
						<span class="focus-input100"></span>
					</div>
				</div>

				<div class="col-md-12">
				<center>
					<div class="titulo" style="padding-bottom: 15px !important">
						<br>
							<h3>Pasos</h3>
					</div>
				</center>
				</div>
				<div class="col-md-12">
					<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
						<!--<span class="label-input100">Paso N° 1</span>-->
						<input class="input100" type="text" name="paso" placeholder='Pasos(Json) &#09;EJ: {"1":"Paso"} '>
						<span class="focus-input100"></span>
					</div>
				</div>

				<div class="col-md-12">
				<center>
					<div class="titulo" style="padding-bottom: 15px !important">
						<br>
							<h3>Condimentos Alternativos</h3>
					</div>
				</center>
				</div>
				<br><br>
				<div class="col-md-12">
					<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
						<!--<span class="label-input100">Ingrediente</span>-->
						<input class="input100" type="text" name="condimento" placeholder='Condimento(Json) &#09;&#09;EJ: {"1":"Condimento"} '>
						<span class="focus-input100"></span>
					</div>
				</div>
		</div>

		<!--Botón-->
		<div class="col-md-12">
			<div class="container-contact100-form-btn">
				<button class="contact100-form-btn" type="submit">
					<span>
						<b>Generar</b>
					</span>
				</button>
			</div>
		</div>
	{!! Form::close() !!}
	</div>
	<br>
</div>
</div>
	</div>
@endsection

