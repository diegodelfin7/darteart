<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
  	<title>DarteArt | Encuentra lo mejor del arte </title>
  	<link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/zocial.css" rel="stylesheet" />
  	<link href="css/header.css" rel="stylesheet" />
    <link href="css/landing.css" rel="stylesheet" />
    <link href="css/landing_result.css" rel="stylesheet" />
    <link href="css/footer.css" rel="stylesheet" />
</head>
<body>
  <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/darte-art">
          	<img src="img/logodarteart.png" alt="" width="250" class="logo">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
          <ul class="nav navbar-nav navbar-right hidden-sm hidden-md hidden-lg">
              <li><a href="">Escultura</a></li>
              <li><a href="">Dibujo</a></li>
              <li><a href="">Collage</a></li>
              <li><a href="">Pintura</a></li>
              <li><a href="">Grabado</a></li>
              <li><a href="">Urbano</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="post" action="session.php">
            <h4 class="hidden-sm hidden-md hidden-lg">Iniciar Sesión</h4>
            <div class="form-group">
              <input type="text" name="session_email" placeholder="Correo Electrónico" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="session_password" placeholder="Contraseña" class="form-control">
              <span class="forget_pass">
              	<a href="#">Olvidaste tu contraseña</a>
              </span>
            </div>
            <button type="submit" class="btn btn-success">Entrar</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
  </nav>
  <section class="container hidden-xs">
    <nav class="inner-nav">
        <ul class="nav nav-justified">
          <li><a href="#">Escultura</a></li>
          <li><a href="#">Dibujo</a></li>
          <li><a href="#">Collage</a></li>
          <li><a href="#">Pintura</a></li>
          <li><a href="#">Grabado</a></li>
          <li><a href="#">Urbano</a></li>
        </ul>
    </nav>
  </section>