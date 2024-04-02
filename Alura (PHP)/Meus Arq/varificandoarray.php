<?php

$notas = [
    'João' => null,
    'Maria' => 6,
    'Sergio' => 8,
    'Ana' => 5,
    'Vinicius' => 10
];

echo "Alguém tirou 10?<br>";

if(in_array(10, $notas) === true){  // in_array = verifica se o valor existe
    echo "Sim  o aluno(a):" . array_search(10, $notas); // array_search = procura o valor 10 na lista de array
}

else{
    echo "Ninguêm";
}

?>