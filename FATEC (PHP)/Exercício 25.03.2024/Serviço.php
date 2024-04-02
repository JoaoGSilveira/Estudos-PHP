<?php

class Servico {
    public $descritivo;
    public $preco;

    public function __construct($descritivo, $preco) {
        $this->descritivo = $descritivo;
        $this->preco = $preco;
    }

    public function getDescritivo() {
        return $this->descritivo;
    }

    public function setDescritivo($descritivo) {
        $this->descritivo = $descritivo;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }
}
?>
