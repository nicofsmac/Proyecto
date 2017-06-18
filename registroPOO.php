


<!DOCTYPE html>
<html>
<head>
<?php
include "head.php";
?>
</head>
<body>
  <div class="container">
    <?php
    include "header.php";

require 'registroPOO/clsValidacion.php';
require 'registroPOO/clsUsuario.php';

if($_POST) {

	$validar = new Validacion();

	//validamos

	$errores = array();

	if(!$validar->validarEmail($_POST['email'])) {
		$errores[] = 'El email no es valido';
	}

	if(!$validar->validarPassword($_POST['password'])) {
		$errores[] = 'El password no es valido';
	}

	if(!$validar->validarUsuario($_POST['usuario'])) {
		$errores[] = 'El usuario no es valido';
	}

	// $dsn = 'mysql:host=localhost;dbname=peliculas_clase_4;charset=utf8mb4;port:3307';
	// $username = 'root';
	// $password = 'root';
	// try {
	//     $pdo = new PDO($dsn, $username, $password);
	// } catch (PDOException $e) {
	//   echo $e->getMessage();
	// }


	if(empty($errores)) {

		$db = new PDO('mysql:host=localhost;dbname=registro',
						'root',
						'root');

		$usuario = new Usuario($db);

		$idusuario = $usuario->registrarUsuario($_POST);

		echo "el id unico es " . $idusuario;

		die('. Ya lo hemos registrado');
	}

}
?>

<div style="color:red">
<?php
if(!empty($_POST)) {
foreach($errores as $e) {
	echo $e . "<br>";
}
}
?>
</div>

<form method="post">

<label>Usuario:</label>
<input type="text" name="usuario">
<br>

<label>Email:</label>
<input type="text" name="email">
<br>

<label>Password:</label>
<input type="password" name="password">
<br>

<input type="submit" name="enviar" value="enviar">

</form>
</div>
<?php
include "footer.php"
?>

</body>
</html>
