<?php
$id = $_POST['id'];;
$nomeusuario = $_POST['nomeusuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
require_once "../db/Usuario.php";
if($id > 0){
	
}else{
	$usuario = Usuario::inserir($nomeusuario, $email, $senha);
}
?>