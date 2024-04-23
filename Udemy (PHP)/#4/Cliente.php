<?php

require_once 'Cliente.class.php';

$cliente1 = new Cliente();

$cliente1->validar('José Carlos', 'jose@carlos.com.br');

$cliente1->exibir();

$cliente2 = new Cliente();

$cliente2->validar('Maria', 'Maria@gmail.com');

$cliente2->exibir();

echo "<pre>";
var_dump($cliente1);
echo "</pre>";

?>