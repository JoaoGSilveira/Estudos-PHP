<?php

require_once 'Revista.class.php';
require_once 'Livro.class.php';
require_once 'Pessoa.class.php';
require_once 'Itens.class.php';
require_once 'Socio.class.php';
require_once 'Autor.class.php';
require_once 'Exemplares.class.php';
require_once 'Emprestimo.class.php';

$dataDevolucao = new Itens('31/07/2024');
$socio = new Socio('João Guilherme', '(14)98765-4321', 'joao@email.com', '123.456.789-00');
$exemplar = new Exemplares('Cebolinha Apaixonado', 'Panini');
$edicao = new Livro("Cebolinha Jovem");
$emprestimo = new Emprestimo('2024/03/01', $dataDevolucao);
$autor = new Autor("Mauricio de Souza", "Brasileiro");
$revista = new Revista(1);

echo '<h3>Sócio</h3>';
echo "<strong>Nome:</strong> {$socio->getNome()}<br>";
echo "<strong>CPF:</strong> {$socio->getCpf()}<br>";
echo "<strong>Telefone:</strong> {$socio->getCelular()}<br>";
echo "<strong>Email:</strong> {$socio->getEmail()}<br>";


echo '<br><h3>Livro</h3>';
echo "<strong>Data do Empréstimo:</strong> {$emprestimo->getDataEmprestimo()}<br>";
echo "<strong>Data de Devolução:</strong> {$dataDevolucao->getDataDevolucao()}<br>";
echo "<strong>Autor:</strong> {$autor->getNome()}<br>";
echo "<strong>Nacionalidade do Autor:</strong> {$autor->getNacionalidade()}<br>";
echo "<strong>Nome do Exemplar:</strong> {$exemplar->getNome()}<br>";
echo "<strong>Edição:</strong> {$edicao->getEdicao()} <br>";
echo "<strong>Editora do Exemplar:</strong> {$exemplar->getEditora()}<br>";
echo "<strong>Revista:</strong> {$revista->getNumero()}<br>";

?>