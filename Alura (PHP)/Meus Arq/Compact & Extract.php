<?php

$dados = [
    'nome' => 'João Guilherme',
    'nota' => 10,
    'idade' => 21
];

extract($dados);

echo "<pre>";
var_dump($dados);
echo "</pre>";

echo "<pre>";
var_dump($nome, $nota, $idade);
echo "</pre>";

echo "<pre>";
var_dump(compact('nome', 'nota', 'idade'));
echo "</pre>";
?>