<?php
class Ator {
    private $nome;
    private $papeis = [];

    public function __construct() {
        $this->nome = null;
        $this->papeis = [];
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPapeis() {
        return $this->papeis;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function adicionarPapel($papel) {
        $this->papeis[] = $papel;
    }
}
?>