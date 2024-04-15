<?php
class Medicamento {
    private $nome;
    private $tarja;
    private $bula;

    public function __construct($nome, $tarja, $bula) {
        $this->nome = $nome;
        $this->tarja = $tarja;
        $this->bula = $bula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTarja() {
        return $this->tarja;
    }

    public function getBula() {
        return $this->bula;
    }
}
?>