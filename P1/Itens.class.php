<?php

class Itens{
    public function __construct(private string $dataDevolucao){}

    public function getDataDevolucao()
    {
        return $this->dataDevolucao;
    }

    public function setDataDevolucao($dataDevolucao)
    {
        $this->dataDevolucao = $dataDevolucao;

        return $this;
    }
}

?>