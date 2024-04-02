<?php
    require_once "Produto.class.php";
    require_once "Fornecedor.class.php";

    $forncedor1 = new Fornecedor("11111111111", "Faber Castel");
    $forncedor2 = new Fornecedor("00111110111", "Faber Pastel");

    $produto = new Produto("Lápis Preto", "Lápis preto número 2", 2.50, array($forncedor1, $forncedor2));

    echo "<pre>";
    var_dump($produto);
    echo "</pre>";
?>