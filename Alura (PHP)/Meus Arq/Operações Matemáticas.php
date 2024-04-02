<?php

	//Começo - Operações matemáticas.

	echo "<br><br>Operações matemáticas:<br><br>";
	
	$soma = 2 + 4;
	$subtracao = 4 - 2;
	$divisao = 2 / 4;
	$multiplicacao = 2 * 4;
	$potencia = 2 ** 4;
	$restodivisao = 2 % 4;
	$nome = "João Guilherme Silveira";

	//Mostrando operações matematicas para o usuário.

	echo "1 - Soma:" . " 2 + 4 = $soma";
	echo "<br>2 - Subtração:" . " 4 - 2 = $subtracao";
	echo "<br>3 - Divisão:" . " 2 / 4 = $divisao";
	echo "<br>4 - Resto Divisão:" . " 2 / 4 = $restodivisao";
	echo "<br>5 - Multiplicação:" . " 2 X 4 = $multiplicacao";
	echo "<br>6 - Potencia:" . " 2^4 = $potencia";
	echo "<br>7 - Nome: $nome";

	//Mostrando os tipos de variáveis para o usuário.

	echo "<br><br><br>Tipos das Variáveis:";
	echo "<br><br>1 - Soma: " . gettype($soma);
	echo "<br>2 - Subtração: " . gettype($subtracao);
	echo "<br>3 - Divisão: " . gettype($divisao);
	echo "<br>4 - Resto da Divisão: " . gettype($restodivisao);
	echo "<br>5 - Multiplicação: " . gettype($multiplicacao);
	echo "<br>6 - Potencia: " . gettype($potencia);
	echo "<br>7 - Nome: " . gettype($nome);

?>