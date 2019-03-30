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
	
public static function inserir($usuario){
	$sql = "insert into usuario(nomeusuario, email, senha) values ('{$usuario->nomeusuario}', '{$usuario->email}', '{$usuario->senha}')";
	$rs = mysqli_query(Conn::conectar(), $sql);
	return $rs;
}
public static function deletar($id){
	if($self->get_usuario($id)){
$sql = "DELETE WHERE id = '$id'";
$rs = mysqli_query(Conn::conectar(), $sql);
return $rs;
			}else{
				return "usuário não encontrado";
			}
}
public static function atualizar($usuario){
		if(self::get_usuario($usuario->id)){
			var_dump($usuario);
	$sql = "UPDATE usuario SET 'nomeusuario' = '$usuario->nomeusuario', 'email' = '$usuario->email' ";
	if(!empty($usuario->senha )){
		$sql.= ", 'senha' = '$usuario->senha' ";
	}
	$sql .= "WHERE id='$usuario->id'";
	echo $sql;
	
	$rs = mysqli_query(Conn::conectar(), $sql);
	var_dump($rs);
	
	return $rs;
		}else{
			return "o usuário não existe";
		}
}
	}
?>