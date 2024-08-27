<!DOCTYPE html>
<html>
	<head>
		<title>Formulário para ALTERAÇÃO de Curso</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Curso</h1>
		<form action="#" method="post">
			<input type="hidden" name="idcurso" id="nome" value="<?php echo $retorno[0]->id_curso; ?>">
			<label for="nome">Alterar nome do Curso</label>
			<input type="text" name="nome" id="nome" value="<?php echo $retorno[0]->nome; ?>">
			<div><?php echo $msg;?></div>
			<br><br>
			<input href="index.php?controle=cursoController&metodo=listar" type="submit">
		</form>
	</body>
</html>