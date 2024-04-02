<?php

$meses = [
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 => 'Abril',
    5 => 'Maio',
    6 => 'Junho',
    7 => 'Julho',
    8 => 'Agosto',
    9 => 'Setembro',
    10 => 'Outubro',
    11 => 'Novembro',
    12 => 'Dezembro'
];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET["mes"]) && $_GET["mes"] >= 1 && $_GET["mes"] <= 12) {
        $numero_mes = $_GET["mes"];
        $nome_mes = $meses[$numero_mes];
        echo "O número $numero_mes corresponde ao mês de $nome_mes.";
    } else {
        echo "Por favor, insira um número entre 1 e 12.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <form method="GET" action="">
        <label for="mes">Digite o número do mês (1-12):</label>
        <input type="number" id="mes" name="mes" min="1" max="12">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
