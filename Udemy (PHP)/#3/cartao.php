<?php

require_once 'Cartao.class.php';

$cliente1 = new Cartao("João", 900);

$cliente1->ativarCartao();

$cliente1->depositar(100);

$cliente1->depositar(300);

$cliente1->compra(100);

$cliente1->depositar(300);

//$cliente1->desativarCartao();

$cliente1->depositar(300);

$cliente1->compra(100);

$cliente1->depositar(300);

//$cliente1->ativarCartao();

$cliente1->compra(100);

$cliente1->compra(10000);

$cliente1->detalhes();

/*echo "<pre>";
var_dump($cliente1);
echo "</pre>";*/

?>