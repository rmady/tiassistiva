<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title>Ti Assistiva Cadastro</title>
<script type="text/javascript" src="cadastro.js"></script>
</head>
<body>
<form name="cadastro" method="GET" action="cadastro.php">
<label>Nome: </label>
<input type="text" name="nome_usuario" placeholder="Digite seu nome completo" id="nome_usuario"><br>
<label>E-mail: </label>
<input type="email" name="email" placeholder="Digite seu e-mail" id="email"><br>
<label>Senha: </label>
<input type="password" name="senha" placeholder="Digite sua senha" id="senha"><br>
<label>Senha: </label>
<input type="password" name="senha2" placeholder="Repita sua senha" id="senha2"><br>
<input type="submit" value="Cadastrar" onclick="validar()">
</form>