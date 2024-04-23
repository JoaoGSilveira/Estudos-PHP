<?php

require_once 'Pessoa.class.php';

class Autor extends Pessoa{
    public function __construct($nome, private string $nacionalidade)
    {
        parent:: __construct($nome);
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }
}
?>