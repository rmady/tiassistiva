<?php
include_once "db/Usuario.php";
print_r (Usuario::get_usuario(1));
$usuario = new Usuario();
$usuarios = $usuario->listar();
print_r ($usuarios);

?>