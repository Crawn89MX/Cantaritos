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
    <div style="background:white; padding-top:50px;" class="container">
        <div class="row">
			@foreach($receta as $res)
				<div class="col-12 col-sm-6 col-md-3">
					<center>
							
							<img src="{{ asset('Images/'.$res->Imagen) }}" class="rounded" style="width: 100%;">
						
							<h3><b> Costo</b></h3>
									<h5> 
										{{ $res->Costo }}
									</h5>
							<br>
							<h3><b> Clasificacion</b></h3>
									<h5> 
										{{ $res->Clasificacion }}
									</h5>
							<br>
							<h3><b> Condimentos Alternativos</b></h3>
									<h5> 
										<?php
										$ingredientes = json_decode($res->Condimentos_Alternativos,true);
											for ($i=1; $i < count($ingredientes); $i++) { 
												echo  "<b>$i .- </b>" . $ingredientes["$i"]."<br>"; 
											} 
										?>
									</h5>
					</center>
				</div>
				<div class="col-12 col-sm-6 col-md-9">
					<center>
							
							<h1><b> {{ $res->Nombre }} </b></h1>
						
					</center>
						<div class="col-12 col-sm-6 col-md-9">
									
							<h3><b> Ingredientes</b></h3>
									<h5> 
										<?php 
											$ingredientes = json_decode($res->Ingredientes,true);
											for ($i=1; $i < count($ingredientes); $i++) { 
												echo "<b>$i .- </b> <pre style='display:inline'>&#09;</pre>" . $ingredientes["$i"]."<br>"; 
											} 
										?>
									</h5>

							<h3><b> Pasos</b></h3>
									<h5> 
										<?php 
											$ingredientes = json_decode($res->Preparacion,true);
											for ($i=1; $i < count($ingredientes); $i++) { 
												echo "<b>$i .- </b> <pre style='display:inline'>&#09;</pre>" . $ingredientes["$i"]."<br>"; 
											} 
										?>
									</h5>
								
						</div>
				</div>
				
			@endforeach
        </div>
    </div>

@endsection