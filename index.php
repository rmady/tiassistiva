<?php
include_once "db/Usuario.php";
print_r (Usuario::get_usuario(1));die;
$usuario = new Usuario();
$usuarios = $usuario->selecao();
print_r ($usuarios);

?>