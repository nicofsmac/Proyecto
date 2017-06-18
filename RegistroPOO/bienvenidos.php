<?php
session_start();
require 'clsValidacion.php';
require 'clsUsuario.php';
if($_SESSION) {
	// print_r($_SESSION);
}else{
	header('location:../loginpoo-2.php');
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
