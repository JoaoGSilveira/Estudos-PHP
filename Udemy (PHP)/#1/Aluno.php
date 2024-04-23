<?php

require_once 'Aluno.class.php';

    $aluno1 = new Aluno();
    $aluno2 = new Aluno();

    $aluno1->nome = "João Guilherme";
    $aluno1->email = "Joao@gmail.com";

    $aluno2->nome = "Bruno Souza";
    $aluno2->email = "bruno@hotmail.com";

    echo "Nome: {$aluno1->nome} <br>";
    echo "E-mail: {$aluno1->email} <br>";
    echo "<hr>";

    echo "Nome: {$aluno2->nome} <br>";
    echo "E-mail: {$aluno2->email} <br>";
    echo "<hr>";

    echo "<pre>";
    var_dump($aluno1);
    echo "</pre>";

    echo "<pre>";
    var_dump($aluno2);
    echo "</pre>";

?>