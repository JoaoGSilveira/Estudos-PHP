<?php

echo "<br><h2>Para array's COMUNS</h2>";
    $notas = [
        5,
        6,
        8,
        2,
        10
    ];

    //sort($notas); //Ordena as variáveis inteira de forma crescente
    rsort($notas); //Ordena as variáveis inteira de forma decrescente

    echo "<pre>";
    var_dump($notas);
    echo "</pre>";

    //Para arrray's ASSOCIATIVOS
    echo "<br><h2>Para array's ASSOCIATIVOS</h2>";

    $notasAssociativas = [
        'João' => 8,
        'Maria' => 6,
        'Sergio' => 8,
        'Ana' => 2,
        'Vinicius' => 10
    ];

    //asort($notasAssociativas); //Ordena as variáveis de array's associativas de forma crescente
    //arsort($notasAssociativas); //Ordena as variáveis de array's associativas de forma decrescente
    //krsort($notasAssociativas); //Ordena as variáveis de array's associativas de forma decrescente e alfabetica/key
    ksort($notasAssociativas); //Ordena as variáveis de array's associativas de forma crescente e alfabetica/key

    echo "<pre>";
    var_dump($notasAssociativas);
    echo "</pre>";

    echo "<br><br>";

    echo "<h2>Verificando Lista de ARRAY</h2>";

    echo "É uma lista de array? (Exemplo: 0, 1, 2, 3...)<br>";

    if(array_is_list($notas) === true){  //Verifica se o array é uma lista ordenada começando de um indice int e seguindo uma sequencia
        echo "É uma lista enumerada sequencialmente.";
    }
    else{
        echo "Não é uma lista enumerada sequencialmente.";
    }

    echo "<br><br>";

    echo "<h2>Verificando EXISTENCIA dentro de um ARRAY</h2>";
    
    if(array_key_exists('João', $notasAssociativas) === true){
        echo "João existe, mas não verifica a nota!";
    }

    else{
        echo "João não existe e não verifica nota!";
    }

    echo "<br><br>";

    echo "<h2>Verifica a nota:</h2>";

    if(isset($notasAssociativas['João']) === true){  //verifica há valores "setados" na array associativa "João"
        echo "João FEZ a prova e tirou {$notasAssociativas['João']}";
    }
    else{
        echo "João NÃO fez a prova!";
    }
    
?>