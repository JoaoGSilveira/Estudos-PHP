<?php
    require_once "Endereco.class.php";
    require_once "Aluno.class.php";

    $aluno1 = new Aluno("Pedro", "123.456.789-10", "(14) 99615-1775", "Rua XV de Novembro", "123", "Centro", "17230456");

    $aluno1->setEndereco("Rua XV de Maio", "375", "Centro", "17204360");

    echo "<pre>";
    var_dump($aluno1);
    echo "</pre>";

    $aluno2 = new Aluno("Maria Carvalho", "7261.1223.123-12", "(14)99728-2131");

    $endereco = new Endereco("Rua 13 de Maio", "782", "Centro", "123823", $aluno2);

    echo "<pre>";
    var_dump($endereco);
    echo "</pre>";
?>