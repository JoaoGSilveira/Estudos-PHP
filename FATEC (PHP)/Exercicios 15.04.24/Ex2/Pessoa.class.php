<?php
class Pessoa {
    protected $nome;
    protected $cpf;
    protected $telefones = [];

    public function __construct($nome, $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getTelefones() {
        return $this->telefones;
    }

    public function addTelefone(Telefone $telefone) {
        $this->telefones[] = $telefone;
    }
}
?>