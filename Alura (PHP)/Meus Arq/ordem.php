<?php

$notas = [
    [
    'Nota' => 10,
    'Nome' => 'João'
    ],

    [
    'Nota' => 6,
    'Nome' => 'Miriam'
    ],

    [
    'Nota' => 8,
    'Nome' => 'Lenin'
    ],
    
];

/*
Ordena de forma decrescente:
function ordenaNotas(array $nota1, array $nota2): int
{
    if($nota1['Nota'] > $nota2['Nota']){
        return -1;
    }

    if($nota1['Nota'] < $nota2['Nota']){
        return 1;
    }

    return 0;
}
*/

function ordenaNotas(array $nota1, array $nota2): int //Mesma função que a de cima resumido e de forma crescente
{
    return $nota1['Nota'] <=> $nota2['Nota'];   //Para fazer de forma decrescente é so alterar as $nota1['Nota'] <=> $nota2['Nota'] para $nota2['Nota'] <=> $nota1['Nota']
}

usort($notas, 'ordenaNotas');

echo "<pre>";
var_dump($notas);
echo "</pre>";

?>