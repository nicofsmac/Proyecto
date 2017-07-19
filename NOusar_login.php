<?php
function existeUsuario()
{
  $errores[1]= "Los datos ingresados no son Correctos";
  $usuarios = file_get_contents("usuarios.json");

  $usuariosArray = explode(PHP_EOL, $usuarios);
  array_pop($usuariosArray);
  if (empty($_POST["mail"]) || empty($_POST["password"])){
    $errores[2] = "Ingrese sus Datos";
  }

//  echo ('<br>enviado->'.$_POST["mail"].', password->'.$_POST["password"]);
  foreach ($usuariosArray as $key => $usuario) {
    $usuarioArray = json_decode($usuario, true);

//echo ('<br>usuario->'. $usuarioArray["mail"].', password->'.$usuarioArray["password"]);

    if ($_POST["mail"] == $usuarioArray["mail"]){ //&& password_verify($_POST["password"], $usuarioArray["password"])){ ++si ejecutamo este codigo no redirecciona a home
        unset($errores);
        header("location:Home.php");exit();
    }
  }
    return   $errores;
}

  if($_POST){
    $errores=existeUsuario();
  }

 ?>
<!DOCTYPE html>
<html>
<head>
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
        <img src="images/bg-2.jpg" alt="background">
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
                      <li><a href="Home.php">casa</a></li>
                        <li><a href="Proyecto_Int_Ligas.html">Ligas</a></li>
                        <li><a href="Proyecto_Int_FAQ.html">Preguntas Frecuentes</a></li>
                        <li><a href="Proyecto_Int_Contacto.html">Contacto</a></li>
                    </ul>
                    <form role="search" class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" placeholder="Buscar" class="form-control">
                        </div>
                    </form>
                </div>
            </nav>
        </div>

        <form class="form-horizontal" method="post" action="login.php">
          <?php if (!empty($errores)) { ?>
            <div style="width:300px;background-color:red:";>
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
                    <input type="email" name="mail" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <input type="password" name="password" class="form-control" id="pwd" placeholder="Contraseña">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Enviar</button>
                </div>
            </div>
        </form>
            </div>
</body>

</html>
