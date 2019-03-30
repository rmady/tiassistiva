<?php
require_once "../db/Usuario.php";
$id = $_GET['id'];
if($id > 0){
	$resultado = Usuario::get_usuario($id);
}elseif(empty($id)){
	echo "informe um id do usuario";die;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title>Ti Assistiva Cadastro</title>
</head>
<body>
<form name="cadastro" method="POST" action="form.php">
<input type="hidden" value="<?php echo $id?>" name="id">
<label>Nome usuário: </label>
<input type="text" name="nomeusuario" value="<?php echo $resultado['nomeusuario']?>" placeholder="Digite seu nome de usuário" id="nome_usuario"><br>
<label>E-mail: </label>
<input type="email" name="email" value="<?php echo $resultado['email'] ?>"placeholder="Digite seu e-mail" id="email"><br>
<label>Senha: </label>
<input type="password" name="senha" placeholder="Digite sua senha" id="senha"><br>
<label>Senha: </label>
<input type="password" name="senha2" placeholder="Repita sua senha" id="senha2"><br>
<input type="submit" value="Cadastrar">
</form>