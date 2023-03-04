<?php 
	include 'conexaobd_php.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = mysqli_query($conexaoBD, "SELECT * FROM usuario WHERE id=$id");

        $count = (is_array($sql)) ? count($sql) :1 ;
		if ($count) {
			$n = mysqli_fetch_array($sql);
			$nome = $n['nome'];
			$sobrenome = $n['sobrenome'];
		}
	}


	if(isset($_POST['editar'])){
		$id = $_GET["id"];
		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$query = "UPDATE usuario SET nome = '$nome', sobrenome= '$sobrenome' WHERE id = $id ";
	    
	    $consulta = mysqli_query($conexaoBD, $query);

	    header('location: tabela.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container col-md-6 offset-md-3">
		<h1>Formulário Edição - PHP com MySql</h1>
		<form method="post">
			<div class="row">
				<div class="col">
					<input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>">
				</div>
				<div class="col">
					<input type="text" class="form-control" name="sobrenome" value="<?php echo $sobrenome; ?>">
				</div>
			</div>
			<br>
			<div>
				<button name="editar" type="submit" class="btn btn-primary">Editar</button>
			</div>
		</form>
	
	</div>

</body>
</html>