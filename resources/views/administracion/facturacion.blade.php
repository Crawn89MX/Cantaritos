@extends('layouts.app') <!--Llama a la carpeta layouts con su archivo app,
						Contiene el navbar y el menú de navegación para no 
						repetir el diseño en todos los archivos-->


@section('content') <!--Todo lo que se pondrá dentro del proyecto
					De que punto a que punto se tomará, en este caso para el diseño
					yield Punto específico, es decir, el orden que se tomará el contenido-->
<style>
		.navbar-light
		{
			background-image: url("{{ asset("images/background.jpg") }}");
			background-size: cover;
			background-position: 0px -280px;
		}
</style>
<div class="titulo">
	<h2>Facturación</h2>
</div>

<!-- Formulario -->
<div class="container">

<div class="row form-group">
<form class="contact100-form">
	<div class="col-md-6">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
			<span class="label-input100">Nombre completo</span>
			<input class="input100" type="text" name="nombre">
			<span class="focus-input100"></span>
		</div>
	</div>
<div class="col-md-3">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
			<span class="label-input100">Apellido paterno</span>
			<input class="input100" type="text" name="apellidop">
			<span class="focus-input100"></span>
		</div>
	</div>
<div class="col-md-3">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
			<span class="label-input100">Apellido materno</span>
			<input class="input100" type="text" name="apellidom">
			<span class="focus-input100"></span>
		</div>
	</div>
	<br><br>
	<div class="col-md-12">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
			<span class="label-input100">Domicilio</span>
			<input class="input100" type="text" name="domicilio">
			<span class="focus-input100"></span>
		</div>
	</div>
	<div class="col-md-6">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
			<span class="label-input100">RFC</span>
			<input class="input100" type="text" name="rfc">
			<span class="focus-input100"></span>
		</div>
	</div>
	<div class="col-md-3">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
			<span class="label-input100">Monto</span>
			<input class="input100" type="text" name="monto" placeholder="$">
			<span class="focus-input100"></span>
		</div>
	</div>
<div class="col-md-3">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
			<span class="label-input100">Cantidad</span>
			<input class="input100" type="text" name="cantidad">
			<span class="focus-input100"></span>
		</div>
	</div>
<div class="col-md-8">
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
			<span class="label-input100">Descripción</span>
			<textarea class="input100" type="text" name="descripcion"></textarea>
			<span class="focus-input100"></span>
		</div>
	</div>
</form>
</div>

<!--Botón-->
<div class="col-md-12">
<div class="container-contact100-form-btn">
	<button class="contact100-form-btn">
		<span>
			<b>Generar</b>
			<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
		</span>
	</button>
</div>
</div>
</div>

@endsection