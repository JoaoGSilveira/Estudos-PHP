<?php
class Filme {
    private $titulo;
    private $papeis = [];

    public function __construct() {
        $this->titulo = null;
        $this->papeis = [];
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getPapeis() {
        return $this->papeis;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function adicionarPapel($papel) {
        $this->papeis[] = $papel;
    }
}
?>