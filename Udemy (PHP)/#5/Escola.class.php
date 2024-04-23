<?php

class Escola{

    public function __construct(private string $nome){}

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}

?>