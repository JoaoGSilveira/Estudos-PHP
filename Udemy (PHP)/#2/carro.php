<?php

require_once 'Carro.class.php';

$carro1 = new Carro(230);

$carro1->ligar();

//$carro1->desligar();

$carro1->acelerar(30);
$carro1->acelerar(60);
$carro1->acelerar(70);


echo "<pre>";
var_dump($carro1);
echo "</pre>";

echo "<hr>";

$carro1->detalhes();

?>