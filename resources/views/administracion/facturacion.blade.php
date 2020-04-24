<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Cantaritos</title>
	<link rel="stylesheet" href="{{ asset("css/estilos.css") }}">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

	<!-- Menu de ingresar de citas, consultorio, balance y administrar -->
			<nav class="navbar navbar-expand-sm bg-light navbar-light justify-content-center" style="padding: 0px; margin: 0px;">
				<ul class="navbar-nav">
	    		<li class="nav-item-img">
						<img src="{{ asset("Images/logo.jpg") }}" alt="" class="estilos-logo">
	    		</li>
			  </ul>
			</nav>

      <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="padding: 0px; margin: 0px;">
				<ul class="navbar-nav">
			    <li class="nav-item">
            <div class="espacio">
              <a href="" class="navbar-brand"><h4><b>Meseros</b></h4></a>
            </div>
			    </li>
			    <li class="nav-item">
			      <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
			    </li>
          <li class="nav-item">
			      <a href="" class="navbar-brand"><h4><b>Chefs</b></h4></a>
			    </li>
			    <li class="nav-item">
			      <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
			    </li>
					<li class="nav-item">
			      <a href="" class="navbar-brand"><h4><b>Cuentas</b></h4></a>
			    </li>
					<li class="nav-item">
			      <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
			    </li><li class="nav-item">
			      <a href="" class="navbar-brand"><h4><b>Facturación</b></h4></a>
			    </li><li class="nav-item">
			      <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
			    </li><li class="nav-item">
			      <a href="" class="navbar-brand"><h4><b>Gestión</b></h4></a>
          </li><li class="nav-item">
			      <a href="" class="navbar-brand"><h4><b>•</b></h4></a>
			  </ul>
			</nav>
	<br>

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

	 <script src="js/jquery-3.4.1.min.js"></script>
	 <script src="js/popper.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
</body>
</html>
