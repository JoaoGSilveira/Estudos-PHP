<?php


//ASSOCIAÇÃO:

require_once 'Escola.class.php';
require_once 'Aluno2.class.php';

$escola1 = new Escola('Udemy');
$aluno1 = new Aluno('José Almeida', $escola1);

echo "<pre>";
var_dump($aluno1);
echo "</pre>";

echo "<hr>";


//AGRAGAÇÃO

require_once 'Produtos.class.php';
require_once 'Carrinho.class.php';

$produto1 = new Produtos('Computador');
$produto2 = new Produtos('Mouses');
$produto3 = new Produtos('Mesa');

$carrinho = new Carrinho();

$carrinho->setProdutos($produto1);
$carrinho->setProdutos($produto2);
$carrinho->setProdutos($produto3);

$carrinho->getProdutos();

echo "<hr>";


//COMPOSIÇÃO

require_once 'Pessoa.class.php';
require_once 'Exibe.class.php';

$exibe = new Exibe("Marcos Paulo");

$exibe->exibe();

?>