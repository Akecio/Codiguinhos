<?php 
	include 'conexaobd_php.php';

	$id = $_GET["id"];
	
	if(isset($_GET['id'])){
	$sql = mysqli_query($conexaoBD, "DELETE FROM usuario WHERE id = {$id} ") 
	   	or die(mysqli_error($conexaoBD));

	header('location: index.php');
	}
?>