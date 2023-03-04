<?php
	include 'conexaobd_php.php';
	$listarSQL = mysqli_query($conexaoBD, "SELECT * FROM usuario");

?>