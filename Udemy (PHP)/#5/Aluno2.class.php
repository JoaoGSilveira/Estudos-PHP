<?php

class Aluno{

    public function __construct(private string $nome, private $escola){}

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEscola()
    {
        return $this->escola;
    }

    public function setEscola($escola)
    {
        $this->escola = $escola;

        return $this;
    }
}

?>