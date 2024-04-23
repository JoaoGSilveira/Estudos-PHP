<?php

class Emprestimo {
    private Itens $item;

    public function __construct(private string $dataEmprestimo, Itens $item) {
        $this->item = $item;
    }

    public function getDataEmprestimo()
    {
        return $this->dataEmprestimo;
    }

    public function setDataEmprestimo($dataEmprestimo)
    {
        $this->dataEmprestimo = $dataEmprestimo;

        return $this;
    }

    public function getItem(): Itens
    {
        return $this->item;
    }
}

?>