<?php
$usuario = new stdClass();
$usuario->id = $_POST['id'];
$usuario->nomeusuario = $_POST['nomeusuario'];
$usuario->email = $_POST['email'];
$usuario->senha = $_POST['senha'];
$delete = 0;
require_once "../db/Usuario.php";
if($delete > 0){
	$resultado = Usuario::deletar($delete);
}elseif($usuario->id > 0){
	if($resultado = Usuario::atualizar($usuario)){
		echo "usuario atualizado";
		var_dump($resultado);
	}
}elseif($usuario->id = -1){
	$resultado = Usuario::inserir($usuario);
}
?>