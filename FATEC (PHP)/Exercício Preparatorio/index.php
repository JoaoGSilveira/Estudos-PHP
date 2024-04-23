<?php

require_once 'Pessoa.class.php';
require_once 'Avaliador.class.php';
require_once 'Chefe.class.php';
require_once 'Receita.class.php';
require_once 'Ingrediente.class.php';
require_once 'Avaliacao.class.php';

$chefe = new Chefe('Culinária Francesa', 'João Chef');

$avaliador = new Avaliador(['PhD em Gastronomia', 'Professor Universitário'], 'Maria Avaliadora');

$receita = new Receita(['Passo 1: Preparar os ingredientes', 'Passo 2: Cozinhar em fogo médio']);

$ingredientes = new Ingredientes();
$ingredientes->setNome('Farinha')->setQuantidade('200g');
$ingredientes->setNome('Açúcar')->setQuantidade('100g');

echo "Ingredientes da receita:<br>";
foreach ($ingredientes->getNome() as $index => $nome) {
    echo "- " . $nome . " (" . $ingredientes->getQuantidade()[$index] . ")<br>";
}

$avaliacao = new Avaliacao('16/04/2024', 8.5);

echo "<br>Detalhes da avaliação:<br>";
echo "Data da Avaliação: " . $avaliacao->getDataAvaliacao()->format('d/m/Y') . "<br>";
echo "Nota: " . $avaliacao->getNota();

$receita2 = new Receita(['Passo 1: Pré-aqueça o forno', 'Passo 2: Misture os ingredientes', 'Passo 3: Asse por 30 minutos']);

echo "<br>Modo de preparar da segunda receita:<br>";
foreach ($receita2->getModoPreparar() as $index => $modo) {
    echo "- " . $modo . "<br>";
}

$avaliacao2 = new Avaliacao('17/04/2024', 9.2);

echo "<br>Detalhes da segunda avaliação:<br>";
echo "Data da Avaliação: " . $avaliacao2->getDataAvaliacao()->format('d/m/Y') . "<br>";
echo "Nota: " . $avaliacao2->getNota() . "<br>";

?>
