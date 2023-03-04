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
		<h1>Formulário Cadastro - PHP com MySql</h1>
		<form method="post" action="salvar.php">
			<div class="row">
				<div class="col">
					<input type="text" class="form-control" placeholder="Nome" name="nome">
				</div>
				<div class="col">
					<input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome">
				</div>
			</div>
			<br>
			<div>
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
		</form>
	
	</div>

	<?php include 'tabela.php'; ?>

</body>
</html>