<?php
class Produto
{
    public function __construct(
        private string $nome = "",
        private string $descricao = "",
        private float $preco = 0.00,
        public array $categoria = []
    ) {
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria[] = $categoria;
        return $this;
    }
}

<<<<<<< HEAD
?>
=======
?>
>>>>>>> 7a03b2e631817bb23138916957a93bdc135e4180
