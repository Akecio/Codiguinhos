<?php
include 'listar.php';
include 'conexaobd_php.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabela PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<br><br><br>
	<div class="container col-md-6 offset-md-3">
		<table  class="table  table-hover">
			<thead>
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Nome</th>
					<th scope="col">Sobrenome</th>
					<th scope="col">Funções</th>
				</tr>
			</thead>
			<?php while ($usuario = mysqli_fetch_assoc($listarSQL)) { ?>
			<tbody>
				<tr>
					<td><?php echo $usuario['id']; ?></td>
					<td><?php echo $usuario['nome']; ?></td>
					<td><?php echo $usuario['sobrenome']; ?></td>
					<td>
						<a href="deletar.php?id=<?php echo $usuario['id']; ?>" class="btn btn-sm btn-danger " >Excluir</a>
						<a href="editar.php?id=<?php echo $usuario['id']; ?>" class="btn btn-sm btn-warning " >Editar</a>
					</td>
				</tr>

			</tbody>
			<?php } ?>
		</table>

		<a href="index.php" class="btn btn-sm btn-warning " >Página Inicial</a>
	</div>
</body>
</html>