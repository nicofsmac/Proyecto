<?php
class Usuario {
	public $email;
	public $password;
	public $usuario;
	public $db;
	public function __construct($db) {
		$this->db = $db;
	}
	public function existeUsuarioConEsteEmail($e) {
		$sql = "SELECT * FROM usuarios WHERE email = '".$e."'";
		$this->db->query($sql);
		return $this->db->fetchColumn();
	}
	public function registrarUsuario($arr) {
		$sql = "INSERT INTO usuarios (usuario, email, password)
		 VALUES ('".$arr['usuario']."','".$arr['email']."',
		 '".password_hash($arr['password'],PASSWORD_DEFAULT)."')";
		$this->db->query($sql);
		return $this->db->lastInsertId();
	}
	public function logeo($arr){
		$sql = "SELECT id, usuario, email, password FROM usuarios
		 WHERE email = '".$arr['email']."'
		 ";
		 //echo $sql;
		$result = $this->db->query($sql);
		$usuario = $result->fetch(PDO::FETCH_ASSOC);
		// print_r($usuario);
// 		$hash=password_hash('123456qwe', PASSWORD_DEFAULT);
// 		$nuevaVar='123456qwe';
// echo $nuevaVar . "array<br>";
// echo $hash . "usuarioDB<br>";
// echo 'Verificando->'.password_verify($nuevaVar, $hash);
		if(password_verify($arr['password'],$usuario["password"])){
			session_start();
			$_SESSION['usuario']=$usuario['usuario'];
			$_SESSION['email']=$usuario['email'];
			$_SESSION['id']=$usuario['id'];
			header('location:registropoo/bienvenidos.php');
			exit();
		}else{
			echo "<-    Error. usuario o password incorrectas";
		}
	}
}
