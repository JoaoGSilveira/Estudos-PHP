<?php

require_once 'Animal.php';
require_once 'Serviço.php';
require_once 'Profissional.php';
require_once 'Atendimento.php';

$proprietario = new Proprietario("Bruno", "(14)99739-1823", "290.123.726-42");
$profissional1 = new Profissional("Carol", "(14)99865-4321", "KLT9823");
$animal1 = new Animal("Mel", "Caramelo", "Vira-Lata", "2024-02-24", $proprietario);
$servico1 = new Servico("Consulta", 100.00);
$dataAtendimento1 = "2024-03-25";

$atendimento1 = new Atendimento($dataAtendimento1, $animal1, $servico1, $profissional1);

$proprietario2 = new Proprietario("Maria", "(14)99234-5678", "123.456.789-00");
$profissional2 = new Profissional("Renata", "(14)99765-9821", "PLK8723");
$animal2 = new Animal("Yuri", "Marrom", "Poodle", "2023-10-15", $proprietario2);
$servico2 = new Servico("Vacinação", 80.00);
$dataAtendimento2 = "2024-03-27";

$atendimento2 = new Atendimento($dataAtendimento2, $animal2, $servico2, $profissional2);

$atendimentos = array($atendimento1, $atendimento2);

foreach ($atendimentos as $index => $atendimento) {
    echo "<h2>Atendimento " . ($index + 1) . ":</h2><br>";

    echo "<strong>Data do Atendimento: </strong>" . $atendimento->getDataAtendimento() . "<br>";

    echo "<h3>Dados do Animal:</h3>";
    echo "<strong>Nome do Animal: </strong>" . $atendimento->getAnimal()->getNome() . "<br>";
    echo "<strong>Cor: </strong>" . $atendimento->getAnimal()->getCor() . "<br>";
    echo "<strong>Raça: </strong>" . $atendimento->getAnimal()->getRaca() . "<br>";
    echo "<strong>Data de Nascimento: </strong>" . $atendimento->getAnimal()->getDataNascimento() . "<br>";

    echo "<h3>Dados do Proprietário:</h3>";
    echo "<strong>Nome do Proprietário: </strong>" . $atendimento->getAnimal()->getProprietario()->getNome() . "<br>";
    echo "<strong>Telefone do Proprietário: </strong>" . $atendimento->getAnimal()->getProprietario()->getTelefone() . "<br>";
    echo "<strong>CPF do Proprietário: </strong>" . $atendimento->getAnimal()->getProprietario()->getCpf() . "<br>";

    echo "<h3>Dados do Profissional:</h3>";
    echo "<strong>Nome do Profissional: </strong>" . $atendimento->getProfissional()->getNome() . "<br>";
    echo "<strong>CRM do Profissional: </strong>" . $atendimento->getProfissional()->getCrmv() . "<br>";
    echo "<strong>Telefone do Profissional: </strong>" . $atendimento->getProfissional()->getTelefone() . "<br>";

    echo "<h3>Dados do Serviço:</h3>";
    echo "<strong>Serviço: </strong>" . $atendimento->getServico()->getDescritivo() . "<br>";
    echo "<strong>Preço do Serviço: </strong>" . $atendimento->getServico()->getPreco() . "<br>";

    echo "<br><br><br>";
}



?>
