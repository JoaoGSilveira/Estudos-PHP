<?php

class Livro{
    public function __construct(private string $edicao){}

    public function getEdicao()
    {
        return $this->edicao;
    }
 
    public function setEdicao($edicao)
    {
        $this->edicao = $edicao;

        return $this;
    }
}

?>