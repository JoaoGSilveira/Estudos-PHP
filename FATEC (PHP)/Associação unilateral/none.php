<?php
    require_once "produto.class.php";
    require_once "fornecedor.class.php";

    $counter = 0;

    $fornecedor = new Fornecedor("111.111.111/0001-21", "Pilot");
    $fornecedor2 = new Fornecedor("222.222.222/0001-22", "Bic");

    $produto = new Produto("Caneta Azul", "Caneta bic esferográfica", 2, array($fornecedor, $fornecedor2));

    /*echo "<pre>";
    var_dump($produto);
    echo "</pre>";*/

    echo "<h1>Produtos</h1><br>";
    echo "Nome: {$produto ->getNome()}<br>";
    echo "Descrição: {$produto->getDescricao()}<br>";
    echo "Preço: $" . number_format($produto->getPreco(), 2, ",", ".") . "<br>";

    echo "<h2>Fornecedores:</h2><br>";

    foreach($produto->getFornecedor() as $objeto)
    {
        $counter++;
        echo "Fornecedor: $counter <br>";
        echo "CNPJ: {$objeto->getCnpj()}<br>";
        echo "Razão: {$objeto->getRazao_social()}<br>";
        echo "<br>";
    }
?>