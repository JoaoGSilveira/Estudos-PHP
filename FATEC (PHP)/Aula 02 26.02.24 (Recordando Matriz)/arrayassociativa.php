<?php

    $alunos = [
        1 => [
            'Nome' => 'José',
            'Media'=> 10
        ],

        [
            'Nome' => 'Maria',
            'Media'=> 10
        ],

        [
            'Nome' => 'João',
            'Media'=> 10
        ],

        [
            'Nome' => 'Victor',
            'Media'=> 10
        ]
    ];

foreach($alunos as $indice => $aluno){
    echo "$indice\t|\t{$aluno['Nome']}\t|\t{$aluno['Media']}\t|\t{$aluno['Peso']}\t|<br>";
}


?>