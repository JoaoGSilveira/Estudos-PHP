<?php

$alunos = [
    'João',
    'Maria',
    'Sergio',
    'Ana',
    'Vinicius'
];

$alunosNovos = [
    'Tiago',
    'Camila'
];

//$alunos2022 = array_merge($alunos, $alunosNovos); // Função para unir arrays

//$alunos2022 = $alunos + $alunosNovos; // Função para unir arrays, porem não adiciona os arrays com indices iguais.

$alunos2022 = [...$alunos, 'João Guilherme', ...$alunosNovos]; // Adicionar elementos entre as listas usando spread operator.

$alunos2022[] = "Luiz"; // Adicionar elementos ao final do array/lista.

array_unshift($alunos2022, 'Stephanie', 'Rafaela'); //Adiciona elementos no início da lista/array.

array_shift($alunos2022); //Remove o primeiro elemento da lista/array. 

array_pop($alunos2022); //Remove o ultimo elemento da lista/array.

echo "<pre>";
var_dump($alunos2022);
echo "</pre>";

?>