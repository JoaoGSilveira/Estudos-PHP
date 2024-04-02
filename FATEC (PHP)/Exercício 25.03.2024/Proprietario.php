<?php

require_once 'Pessoa.php';

class Proprietario extends Pessoa {
    public $cpf;

    public function __construct($nome, $telefone, $cpf) {
        parent::__construct($nome, $telefone);
        $this->cpf = $cpf;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
}
?>
