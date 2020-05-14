    @extends('layouts.app')


    @section('content')
    <style>
      body
      {
        background-image: url("{{asset("Images/background.jpg")}}");
        background-size: cover;
        background-position: 0px -125px;
      }
      .imagen
      {
        -webkit-filter: invert(100%);
        filter: invert(100%);
        padding-top: 225px;
      }
      .btn-default
      {
        background-color: white;
        color: black;
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
	</style>
		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif


		<div class="margenes">
			<div class="container contenido">
				<center>
					<div class="titulo">
						<br>
							<h2>Registro</h2>
					</div>
				</center>

				<!-- Formulario -->
				<div class="container">
					<form method="POST" action="{{ url('register/registro')}}">
						<div class="row form-group contact100-form" style="margin: 0px !important">
							@csrf
							<div class="col-md-12">
								<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
									<span class="label-input100">Nombre(s)</span>
									<input class="input100" type="text" name="nombre" required>
									<span class="focus-input100"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
									<span class="label-input100">Apellido Paterno</span>
									<input class="input100" type="text" name="apellidop" required>
									<span class="focus-input100"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
									<span class="label-input100">Apellido Materno</span>
									<input class="input100" type="text" name="apellidom" required>
									<span class="focus-input100"></span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Correo is required" >
									<span class="label-input100">Correo</span>
									<input class="input100" type="email" name="correo" required>
									<span class="focus-input100"></span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
									<span class="label-input100">Contraseña</span>
									<input class="input100" type="password" name="password" required>
									<span class="focus-input100"></span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required" >
									<span class="label-input100">Confirmación de contraseña</span>
									<input class="input100" type="password" name="passwordr" required>
									<span class="focus-input100"></span>
								</div>
							</div>
						</div>
						<!--Botón-->
						<div class="col-md-12">
							<div class="container-contact100-form-btn">
								<button class="contact100-form-btn" type="submit">
									<span>
										<b>Crear</b>
									</span>
								</button>
							</div>
						</div>
					</form>
					<?php
						SESSION_START();
						$_SESSION['nombre'] = $nombre;
						$_SESSION['apellidop'] = $apellidop;
						$_SESSION['apellidom'] = $apellidom;
						$_SESSION['correo'] = $correo;
					?>
				</div>
				<br>
			</div>
		</div>
    @endsection