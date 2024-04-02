<?php

/*  Exemplo de Função:
$x = 10;

function addnum($x){
    return $x = $x + 2;
}

*/

function sacar(array $conta, float $vasacar){
    if($vasacar > $conta['Saldo']){
        echo "Você não pode sacar esse valor da conta de {$conta['Nome']}!<br><br>";
    }
    else{
        $conta['Saldo'] -= $vasacar;
    }

    return $conta;
}

function depositar(array $conta, float $vadepositar){
    if($vadepositar > 0){
        $conta['Saldo'] += $vadepositar;
    }
    else{
        echo "Você so pode depositar valores POSITIVOS!!!";
    }
    return $conta;
}

$contas = [
    0 => [
        'Nome' => 'João Guilherme',
        'Saldo' => 9000
    ], 
    1 => [
        'Nome' => 'Bruna',
        'Saldo' => 2000
    ], 
    2 => [
        'Nome' => 'Vitor',
        'Saldo' => 22000
    ]
];

foreach($contas as $indice => $conta){
    echo "{$conta['Nome']} tem saldo de {$conta['Saldo']} e está no indice {$indice} <br>";
}

echo "<br><br><br>";

$contas[0] = sacar($contas[0], 10000);
$contas[1] = sacar($contas[1], 500);
$contas[2] = sacar($contas[2], 10000);

$contas[0] = depositar($contas[0], 100000);
$contas[1] = depositar($contas[1], 90000);
$contas[2] = depositar($contas[2], 50000);

foreach($contas as $indice => $conta){
    echo "{$conta['Nome']} tem saldo de {$conta['Saldo']} e está no indice {$indice} <br>";
}

?>