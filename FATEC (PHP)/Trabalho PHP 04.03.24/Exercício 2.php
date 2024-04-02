<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
$countposi = 0;
$countnega = 0;

$countpar = 0;
$countimpar = 0;

$min = -100;
$max = 100;

$vet = array();

echo "Os números da vez são: ";

for($i = 0; $i < 10; $i++){
    $vet[$i] = rand($min, $max);
    echo "$vet[$i]\t|\t";
}

echo "<br><br><br>";

foreach($vet as $numero) {
    if($numero >= 0) {
        $countposi++;
    } else {
        $countnega++;
    }

    if($numero % 2 == 0) {
        $countpar++;
    } else {
        $countimpar++;
    }
}

echo '<table>';
echo '<tr><th>Tipo</th><th>Números</th><th>Total</th></tr>';
echo "<tr><td>Positivos</td><td>";
foreach ($vet as $numero) {
    if ($numero >= 0) {
        echo "$numero | ";
    }
}
echo "</td><td>$countposi</td></tr>";

echo "<tr><td>Negativos</td><td>";
foreach ($vet as $numero) {
    if ($numero < 0) {
        echo "$numero | ";
    }
}
echo "</td><td>$countnega</td></tr>";

echo "<tr><td>Pares</td><td>";
foreach ($vet as $numero) {
    if ($numero % 2 == 0) {
        echo "$numero | ";
    }
}
echo "</td><td>$countpar</td></tr>";

echo "<tr><td>Ímpares</td><td>";
foreach ($vet as $numero) {
    if ($numero % 2 != 0) {
        echo "$numero | ";
    }
}
echo "</td><td>$countimpar</td></tr>";
echo '</table>';
?>

</body>
</html>
