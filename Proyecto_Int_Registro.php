<?php
require_once("funciones.php");
$pNombre = "";
$pPass = "";
$pMail = "";

if ($_POST)
{
  $pNombre = $_POST["nombre"];
  $pPass = $_POST["password"];
  $pMail = $_POST["mail"];

  $errores = validarUsuario($_POST);


  if (empty($errores))
  {
    $usuario = crearUsuario($_POST);

    guardarUsuario($usuario);

    enviarALogin();
  }
}
?>

<!DOCTYPE html>
<html>

<he ad>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles-sd.css">
    <link rel="stylesheet" href="css/styles-md.css">
    <link rel="stylesheet" href="css/styles-desktop.css">
    <title>Proyecto</title>
</head>

<body>
    <div class="container">
        <img src="images/bg-2.jpg" alt="backgorund">
        <div class="row">
            <nav role="navigation" class="navbar navbar-inverse">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
                    <a href="#" class="navbar-brand">PROYECTO</a>
                </div>
                <!-- Collection of nav links, forms, and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="Proyecto_Int_FAQ.html">Preguntas Frecuentes</a></li>
                        <li><a href="Proyecto_Int_Contacto.html">Contacto</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <form action="Proyecto_Int_Registro.php" method="post" class="form-horizontal">
          <?php if (!empty($errores)) { ?>
            <div style="width:300px;background-color:green";>
    					<ul>
    						<?php foreach ($errores as $error) { ?>
    							<li>
    								<?php echo $error ?>
    							</li>
    						<?php } ?>
    					</ul>
    				</div>
    			<?php } ?>
            <div class="form-group">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <input type="text" name="nombre" class="form-control" value="" placeholder="Nombre..">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <input type="text" name="mail" class="form-control" valuer="" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <input type="text" name="password" class="form-control" value="" id="pwd" placeholder="Contraseña">
                </div>
            </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Enviar</button>
                </div>
            </div>
          </form>
</body>
</html>
