<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 PHP</title>
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
    $alunos = [
        [
            'Nome' => 'João',
            'Media' => 9.6
        ],

        [
            'Nome' => 'Iris',
            'Media' => 10
        ],

        [
            'Nome' => 'Ana',
            'Media' => 6.7
        ],

        [
            'Nome' => 'Bruno',
            'Media' => 3
        ],

        [
            'Nome' => 'Aline',
            'Media' => 9.6
        ],

        [
            'Nome' => 'Alice',
            'Media' => 8.6
        ],

        [
            'Nome' => 'Luciano',
            'Media' => 9.3
        ],

        [
            'Nome' => 'Gustavo',
            'Media' => 6.2
        ],

        [
            'Nome' => 'Alisson',
            'Media' => 7.3
        ],

        [
            'Nome' => 'Fernando',
            'Media' => 4.2
        ]
    ];

    echo '<h2>Lista de Alunos e Médias</h2>';
    echo '<table border="1">';
    echo '<tr><th>Aluno(a)</th><th>Média</th></tr>';
    foreach ($alunos as $aluno) {
        echo '<tr>';
        echo '<td>' . $aluno['Nome'] . '</td>';
        echo '<td>' . $aluno['Media'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    $totalalunos = count($alunos);
    $somamedia = 0;
    $maiormedia = 0;
    $nomeMaiorAluno = '';

    foreach ($alunos as $aluno) {
        $somamedia += $aluno['Media'];

        if ($aluno['Media'] > $maiormedia) {
            $maiormedia = $aluno['Media'];
            $nomeMaiorAluno = $aluno['Nome'];
        }
    }

    $mediasala = $somamedia / $totalalunos;

    echo "<p>A média da sala foi de: $mediasala e a maior nota foi do aluno(a): $nomeMaiorAluno com a média de $maiormedia</p>";
?>
</body>
</html>
