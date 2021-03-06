<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<title>DarteArt | Registro </title>
	<link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<link href="css/register.css" rel="stylesheet" />
	<link href="css/footer.css" rel="stylesheet" />
</head>
<body>

	<header class="registro_header">
		<div class="container">
			<div class="registro_header_logo">
				<a href="http://localhost/darte-art">
					<img src="img/logodarteart.png" alt="" width="100%">
				</a>
			</div>
		</div>
		<hr class="hr-logo" />
	</header>

	<section class="registro_content">
		<div class="container">
			<div class="registro_content_form">
				<form action="#" method="POST">
					<div class="form-group">
					    <label for="exampleInputNombres">Nombres</label>
					    <input type="text" name="session_nombres" class="form-control" id="" placeholder="Nombres" >
  					</div>
					<div class="form-group">
					    <label for="exampleInputApellidos">Apellidos</label>
					    <input type="text" name="session_apellidos" class="form-control" id="" placeholder="Apellidos" >
  					</div>
					<div class="form-group">
					    <label for="exampleInputEmail">Email</label>
					    <input type="email" name="session_email" class="form-control" id="" placeholder="Email" >
  					</div>
				  	<div class="form-group">
				    	<label for="exampleInputPassword">Contraseña</label>
				    	<input type="password" class="form-control" name="session_password" placeholder="Password" >
				  	</div>
				  	<div class="form-group">
				    	<label for="exampleInputUserType">Elige tu usuario </label>
				    	<select name="" id="" class="form-control">
				    		<option value="null">Selecciona </option>
				    		<option value="1">Artista</option>
				    		<option value="2">Interesado</option>
				    	</select>
				  	</div>
				  	<div class="form-group">
				    	<a href="#">Terminos y condiciones</a>
				  	</div>
  					<button type="submit" name="btnregister" class="btn btn-success">Aceptar</button>
				</form>
			</div>
		</div>
	</section>

	<?php include('includes/footer.php'); ?>