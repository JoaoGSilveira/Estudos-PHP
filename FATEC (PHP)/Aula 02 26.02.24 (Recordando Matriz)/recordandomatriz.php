<?php

    $alunos = [
        [
            'Nome' => 'João',
            'Altura' => 1.75,
            'Semestre' => 4
        ],

        [
            'Nome' => 'Luiz Henrique',
            'Altura' => 1.80,
            'Semestre' => 3
        ],

        [
            'Nome' => 'Roberto',
            'Altura' => 1.78,
            'Semestre' => 5
        ],

        [
            'Nome' => 'Vânia',
            'Altura' => 1.90,
            'Semestre' => 6
        ]

    ];

    foreach ($alunos as $indice => $aluno){
        //echo $indice . ' o aluno ' . $aluno['Nome'] . ' tem ' . $aluno['Altura'] . ' e está no semestre ' . $aluno['Semestre'] . '<br>';
        echo "<pre>";
        var_dump($aluno);
        echo "</pre>";
    }
    
?>