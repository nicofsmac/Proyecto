<?php
session_start();

require 'clsValidacion.php';
require 'clsUsuario.php';

if($_SESSION) {

	// print_r($_SESSION);

}else{
	header('location: login.php');

}
?>
<html>
<head>
</head>
<body>
Te has logeado

<a href="salir.php">Cerrar Session</a>
</body>
</html>
