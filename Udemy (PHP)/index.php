<?php
require_once 'Cartao.class.php';

    $cliente1 = new Cartao('Cartão Desativado', "Maria", 2000, '');

    $cliente1->ativarCartao();

    $cliente1->comprar(30);
    $cliente1->comprar(30);
    $cliente1->comprar(30);

    $cliente1->desativarCartao();

    $cliente1->comprar(30);
    $cliente1->comprar(30);
    $cliente1->comprar(30);

    $cliente1->ativarCartao();

    $cliente1->comprar(30);

    echo "Nome do Titular: {$cliente1->getTitular()}<br>";
    echo "Status do Cartão: {$cliente1->getStatus()}<br>";
    echo "Saldo: {$cliente1->getSaldo()}<br>";
    echo "Mensagem: {$cliente1->getMsg()}<br>";
?>