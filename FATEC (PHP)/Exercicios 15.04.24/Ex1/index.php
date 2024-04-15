<?php
require_once 'Ator.class.php';
require_once 'Filme.class.php';
require_once 'Papel.class.php';

$atores = [];
$filmes = [];
$papeis = [];

$ator = new Ator();
$ator->setNome("Tom Cruise");
$atores[] = $ator;

$filme = new Filme();
$filme->setTitulo("Top Gun Maverick");
$filmes[] = $filme;

$papel = new Papel();
$papel->setNome("Pete \"Maverick\" Mitchell");
$papel->setAtor($ator);
$papel->setFilme($filme);
$papeis[] = $papel;

$ator->adicionarPapel($papel);
$filme->adicionarPapel($papel);

$ator2 = new Ator();
$ator2->setNome("Tom Cruise");
$atores[] = $ator2;

$filme2 = new Filme();
$filme2->setTitulo("Top Gun");
$filmes[] = $filme2;

$papel2 = new Papel();
$papel2->setNome("Pete Mitchell");
$papel2->setAtor($ator2);
$papel2->setFilme($filme2);
$papeis[] = $papel2;

$ator2->adicionarPapel($papel2);
$filme2->adicionarPapel($papel2);


$ator3 = new Ator();
$ator3->setNome("Johnny Depp");
$atores[] = $ator3;

$filme3 = new Filme();
$filme3->setTitulo("Piratas do Caribe");
$filmes[] = $filme3;

$papel3 = new Papel();
$papel3->setNome("Jack Sparrow");
$papel3->setAtor($ator3);
$papel3->setFilme($filme3);
$papeis[] = $papel3;

$ator3->adicionarPapel($papel3);
$filme3->adicionarPapel($papel3);

foreach ($atores as $ator) {
    echo "Ator: " . $ator->getNome() . "<br>";
    foreach ($ator->getPapeis() as $papel) {
        echo "Filme: " . $papel->getFilme()->getTitulo() . "<br>";
        echo "Papel: " . $papel->getNome() . "<br>";
    }
    echo "<br><br><br>";
}
?>
