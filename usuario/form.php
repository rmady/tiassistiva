<?php
$id = $_POST['id'];;
$nomeusuario = $_POST['nomeusuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
require_once "../db/Usuario.php";
if($id > 0){
	$sql = "UPDATE usuario SET id = '$id', nomeusuario = '$nomeusuario', email = '$email', senha = '$senha'";
	$rs = mysqli_query(Conn.php::conectar());
}else{
	$usuario = Usuario::inserir($nomeusuario, $email, $senha);
}
?>