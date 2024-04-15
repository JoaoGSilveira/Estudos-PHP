<?php
class Papel {
    private $nome;
    private $ator;
    private $filme;

    public function __construct() {
        $this->nome = null;
        $this->ator = null;
        $this->filme = null;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getAtor() {
        return $this->ator;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setAtor($ator) {
        $this->ator = $ator;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
    }
}
?>