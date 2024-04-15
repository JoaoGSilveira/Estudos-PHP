<?php
    require_once "Carro.class.php";

    $carro1 = new Carro();

    $carro1 -> validar("Gol G4", "Chumbo");

    $carro1 -> exibir();

    /*echo "<pre>";
    echo var_dump($carro1);
    echo "</pre>";*/
?>