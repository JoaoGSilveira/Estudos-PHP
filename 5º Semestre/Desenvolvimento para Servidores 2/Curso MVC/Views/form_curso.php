<!DOCTYPE html>
<html>
	<head>
		<title>Formulário Curso</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>Curso</h1>
		<form action="#" method="post">
			<label for="nome">Nome do Curso</label>
			<input type="text" name="nome" id="nome">
			<div><?php echo $msg;?></div>
			<br><br>
			<input href="index.php?controle=cursoController&metodo=listar" type="submit">
		</form>
	</body>
</html>