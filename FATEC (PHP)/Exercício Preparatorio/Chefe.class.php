<?php

require_once 'Pessoa.class.php';

class Chefe extends Pessoa
{
    public function __construct(
        public string $especialidade,
        $nome
    ) {
        parent::__construct($nome);
    }

    public function getEspecialidade()
    {
        return $this->especialidade;
    }
    
    public function getNome()
    {
        return $this->nome;
    }

    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}
