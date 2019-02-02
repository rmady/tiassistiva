<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title>Ti Assistiva Cadastro</title>
</head>
<body>
<form name="cadastro" method="POST" action="form.php">
<input type="hidden" name="id">
<label>Nome usuário: </label>
<input type="text" name="nomeusuario" placeholder="Digite seu nome de usuário" id="nome_usuario"><br>
<label>E-mail: </label>
<input type="email" name="email" placeholder="Digite seu e-mail" id="email"><br>
<label>Senha: </label>
<input type="password" name="senha" placeholder="Digite sua senha" id="senha"><br>
<label>Senha: </label>
<input type="password" name="senha2" placeholder="Repita sua senha" id="senha2"><br>
<input type="submit" value="Cadastrar">
</form>