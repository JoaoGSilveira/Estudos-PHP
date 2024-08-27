<!DOCTYPE html>
<html>
	<head>
		<title>Lista de Cursos</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Cursos</h1>
		<table border = "1">
			<tr>
				<th>Código</th>
				<th>Aluno</th>
				<th>Ações</th>
			</tr>
			<?php
			if(is_array($retorno))
			{
				foreach($retorno as $dado)
				{
					echo "
					<tr>
						<td>{$dado->id_curso}</td>
						<td>{$dado->nome}</td>
						<td>
							<a href='index.php?controle=cursoController&metodo=alterar&id={$dado->id_curso}'>Alterar</a>
							&nbsp;&nbsp;
							<a href='index.php?controle=cursoController&metodo=excluir&id={$dado->id_curso}'>Excluir</a>
						</td>
					<tr>";
				}
			}
			?>
		</table>
		<a href="index.php?controle=cursoController&metodo=inserir">Novo Curso</a>
	</body>
</html>