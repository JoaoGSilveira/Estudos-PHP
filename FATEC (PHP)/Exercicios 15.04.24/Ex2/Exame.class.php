<?php
class Exame {
    private $nome;
    private $preparo;

    public function __construct($nome, $preparo) {
        $this->nome = $nome;
        $this->preparo = $preparo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreparo() {
        return $this->preparo;
    }
}
?>