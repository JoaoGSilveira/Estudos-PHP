<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
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

$veiculos = [
    0 => [
        'Modelo' => 'Argo',
        'Fabricante' => 'Fiat',
        'Cor' => 'Prata',
        'Portas' => 4,
        'Ano' => 2022
    ],

    [
        'Modelo' => 'Fiesta',
        'Fabricante' => 'Ford',
        'Cor' => 'Preto',
        'Portas' => 2,
        'Ano' => 2015
    ],

    [
        'Modelo' => 'Toro',
        'Fabricante' => 'Fiat',
        'Cor' => 'Vermelho',
        'Portas' => 4,
        'Ano' => 2023
    ],

    [
        'Modelo' => 'Onix',
        'Fabricante' => 'Chevrolet',
        'Cor' => 'Preto',
        'Portas' => 2,
        'Ano' => 2019
    ],

    [
        'Modelo' => 'Ranger',
        'Fabricante' => 'Ford',
        'Cor' => 'Prata',
        'Portas' => 4,
        'Ano' => 2023
    ],

    [
        'Modelo' => 'Tucson',
        'Fabricante' => 'Hyundai',
        'Cor' => 'Vinho',
        'Portas' => 4,
        'Ano' => 2021
    ],

    [
        'Modelo' => 'Ecosport',
        'Fabricante' => 'Ford',
        'Cor' => 'Preto',
        'Portas' => 4,
        'Ano' => 2023
    ],

    [
        'Modelo' => 'Saveiro',
        'Fabricante' => 'Volkswagen',
        'Cor' => 'Branco',
        'Portas' => 2,
        'Ano' => 2020
    ],

    [
        'Modelo' => 'Jetta',
        'Fabricante' => 'Volkswagen',
        'Cor' => 'Prata',
        'Portas' => 4,
        'Ano' => 2023
    ],

    [
        'Modelo' => 'Civic',
        'Fabricante' => 'Honda',
        'Cor' => 'Preto',
        'Portas' => 4,
        'Ano' => 2024
    ],

    [
        'Modelo' => 'Cruze',
        'Fabricante' => 'Chevrolet',
        'Cor' => 'Prata',
        'Portas' => 4,
        'Ano' => 2023
    ]
    ];

    echo '<h1>Lista de Carros</h1>';
    echo '<table border="1">';
    echo '<tr><th>No. Registro</th><th>Modelo</th><th>Fabricante</th><th>Cor</th><th>Portas</th><th>Ano</th></tr>';
    foreach ($veiculos as $indice => $veiculo) {
        echo '<tr>';
        echo '<td>' . $indice . '</td>';
        echo '<td>' . $veiculo['Modelo'] . '</td>';
        echo '<td>' . $veiculo['Fabricante'] . '</td>';
        echo '<td>' . $veiculo['Cor'] . '</td>';
        echo '<td>' . $veiculo['Portas'] . '</td>';
        echo '<td>' . $veiculo['Ano'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    echo '<h1><br>Modelos e anos dos veículos:</h1><br>';

    echo '<table border="1">';
    echo '<tr><th>Modelo</th><th>Ano</th></tr>';
    foreach ($veiculos as $veiculo) {
        echo '<tr>';
        echo '<td>' .$veiculo['Modelo'] . '</td>';
        echo '<td>' . $veiculo['Ano'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    echo '<h1><br>Veículos com a cor prata:</h1><br>';

    echo '<table border="1">';
    echo '<tr><th>Modelo</th><th>Fabricante</th><th>Cor</th><th>Portas</th><th>Ano</th></tr>';
    foreach ($veiculos as $veiculo) {
        if($veiculo['Cor'] == 'Prata'){
            echo '<tr>';
            echo '<td>' . $veiculo['Modelo'] . '</td>';
            echo '<td>' . $veiculo['Fabricante'] . '</td>';
            echo '<td>' . $veiculo['Cor'] . '</td>';
            echo '<td>' . $veiculo['Portas'] . '</td>';
            echo '<td>' . $veiculo['Ano'] . '</td>';
            echo '</tr>';
        }
    }
    echo '</table>';

    echo '<h1><br>Todos os veículos, cor e quantidade de portas:<br></h1>';
    echo '<table border="1">';
    echo '<tr><th>Modelo</th><th>Cor</th><th>Portas</th></tr>';
    foreach ($veiculos as $indice => $veiculo) {
        echo '<tr>';
        echo '<td>' . $veiculo['Modelo'] . '</td>';
        echo '<td>' . $veiculo['Cor'] . '</td>';
        echo '<td>' . $veiculo['Portas'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    echo '<h1><br>Todos os veículos da fiat:</h1><br>';

    echo '<table border="1">';
    echo '<tr><th>Modelo</th><th>Fabricante</th><th>Cor</th><th>Portas</th><th>Ano</th></tr>';
    foreach ($veiculos as $veiculo) {
        if($veiculo['Fabricante'] == 'Fiat'){
            echo '<tr>';
            echo '<td>' . $veiculo['Modelo'] . '</td>';
            echo '<td>' . $veiculo['Fabricante'] . '</td>';
            echo '<td>' . $veiculo['Cor'] . '</td>';
            echo '<td>' . $veiculo['Portas'] . '</td>';
            echo '<td>' . $veiculo['Ano'] . '</td>';
            echo '</tr>';
        }
    }
    echo '</table>';

    echo '<h1><br>Todos os veículos com ano de fabricação igual ou superior a 2021:</h1><br>';

    echo '<table border="1">';
    echo '<tr><th>Modelo</th><th>Fabricante</th><th>Cor</th><th>Portas</th><th>Ano</th></tr>';
    foreach ($veiculos as $veiculo) {
        if($veiculo['Ano'] >= '2021'){
            echo '<tr>';
            echo '<td>' . $veiculo['Modelo'] . '</td>';
            echo '<td>' . $veiculo['Fabricante'] . '</td>';
            echo '<td>' . $veiculo['Cor'] . '</td>';
            echo '<td>' . $veiculo['Portas'] . '</td>';
            echo '<td>' . $veiculo['Ano'] . '</td>';
            echo '</tr>';
        }
    }
    echo '</table>';

?>
</body>
</html>