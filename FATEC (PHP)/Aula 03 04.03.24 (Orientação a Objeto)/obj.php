<?php
    require_once "phpV8.php";

    $obj = new Cliente2("Cú");

    /*
    echo "<pre>";
    var_dump($obj);
    echo "</pre>";
    */

    echo $obj1 -> getNome();
    echo "{obj->getnome()}<br>";
    $obj -> setNome("JGimpresa");
    echo "{obj->getNome()}<br>";
?>