<?php

$servidor = 'localhost';
$usuario = '';
$senha = '';
$banco = '';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

if(mysqli_connect_errno()) trigger_error(mysqli_connect_errno());

?>
