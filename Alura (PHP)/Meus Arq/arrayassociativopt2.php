<?php

    $estados = [[
            'Cidade' => 'Amazonas',
            'Estado' => 'AM'
        ],
        [
            'Cidade' => 'Bahia',
            'Estado' => 'BA'
        ],
        [
            'Cidade' => 'Espirito Santo',
            'Estado' => 'BA'
        ],
        [
            'Cidade' => 'São Paulo',
            'Estado' => 'BA'
        ]
        ];
    
        foreach($estados as $cidades){
            ['Cidade' => $cidade, 'Estado' => $estado] = $cidades;
            echo "Cidade: $cidade, Estado: $estado<br><br>";
        }
        
?>