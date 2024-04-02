<?php

require_once 'Proprietario.php';

class Animal {
    public $nome;
    public $cor;
    public $raca;
    public $dataNascimento;
    public $proprietario;

    public function __construct($nome, $cor, $raca, $dataNascimento, $proprietario) {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->raca = $raca;
        $this->dataNascimento = $dataNascimento;
        $this->proprietario = $proprietario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function setRaca($raca) {
        $this->raca = $raca;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getProprietario() {
        return $this->proprietario;
    }

    public function setProprietario($proprietario) {
        $this->proprietario = $proprietario;
    }
}
?>
