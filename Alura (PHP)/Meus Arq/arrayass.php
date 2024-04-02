<?php

$cidades = [
    3525300 => [
        'Estado' => 'SP',
        'Cidade' => 'Jaú',
        'DDD' => 14,
        'Código de Município' => 3525300
    ],

    3526803 => [
        'Estado' => 'SP',
        'Cidade' => 'Leçois Paulista',
        'DDD' => 14,
        'Código de Município' => 3526803
    ],

    3506003 => [
        'Estado' => 'SP',
        'Cidade' => 'Bauru',
        'DDD' => 14,
        'Código de Município' => 3506003
    ],

    3526902 => [
        'Estado' => 'SP',
        'Cidade' => 'Limeira',
        'DDD' => 14,
        'Código de Município' => 3526902
    ]
     ];


     //Adicionando ARRAY ASSOCIATIVA.
     $cidades[3539301] = [
        'Estado' => 'SP',
        'Cidade' => 'Pirassununga',
        'DDD' => 17,
        'Código de Município' => 3539301
     ];

     foreach($cidades as $cm => $cidade){
        echo "Cidade:\t" . $cidade['Cidade'] . "<br>Estado:\t" . $cidade['Estado'] . "<br>DDD:\t" . $cidade['DDD'] . "<br>Código de
         Município:\t" . $cm;
        echo "<br><br>";
     }

?>