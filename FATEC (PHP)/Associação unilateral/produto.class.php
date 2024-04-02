<?php

    class Produto
    {
        public function __construct(private string $nome = "", private string $descricao = "", private float $preco = 0.00, private array $fornecedor = array()){}
        
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


        /**
         * Get the value of fornecedor
         */ 
        public function getFornecedor()
        {
                return $this->fornecedor;
        }

        /**
         * Set the value of fornecedor
         *
         * @return  self
         */ 
        public function setFornecedor($fornecedor)
        {
                $this->fornecedor = $fornecedor;

                return $this;
        }
    }

?>