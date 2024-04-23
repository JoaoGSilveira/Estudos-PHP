<?php

class Carrinho{
    public function __construct(private array $produtos = []){}

    public function getProdutos()
    {
        foreach($this->produtos as $produto){
            echo $produto->getNome() . "<br>";
        }
    }

    public function setProdutos(Produtos $produtos)
    {
        $this->produtos[] = $produtos;

        return $this;
    }
}

?>