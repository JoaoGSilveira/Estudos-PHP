<?php

require_once 'Pessoa.class.php';

class Avaliador extends Pessoa
{
    public function __construct(private array $curriculo = [], $nome)
    {
        parent::__construct($nome);
    }

    public function getCurriculo()
    {
        return $this->curriculo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setCurriculo($curriculo)
    {
        $this->curriculo[] = $curriculo;

        return $this;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}
