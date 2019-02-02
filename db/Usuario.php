<?php
require_once "Conn.php";
class Usuario {
	//retorna uma lista com todos os usuários.
	function listar(){
		$sql = "select * from usuario";
		$rs = mysqli_query(Conn::conectar(), $sql);
		return mysqli_fetch_all($rs);
		
	}
public static function get_usuario($id){
	$sql = "select * from usuario where id='{$id}'";
	$rs = mysqli_query(Conn::conectar(), $sql);
	return mysqli_fetch_array($rs);
}
	
public static function inserir($nomeusuario, $email, $senha){
	$sql = "insert into usuario(nomeusuario, email, senha) values ('{$nomeusuario}', '{$email}', '{$senha}')";
	$rs = mysqli_query(Conn::conectar(), $sql);
	return $rs;
	
}

	}
	
?>