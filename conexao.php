<?php
$bd_local = "localhost";
$usuario = "root";
$senha = "";
$bd = "banco_vinicola";

$conex = mysqli_connect($bd_local, $usuario, $senha, $bd);
if(mysqli_connect_errno()){
	echo "Erro de conexão: " . mysqli_connect_error();
}

?>
