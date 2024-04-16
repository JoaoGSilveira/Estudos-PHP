<?php

class Ingredientes
{
    public function __construct(
        private array $nome = [],
        private array $quantidade = []
    ) {
    }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome[] = $nome;

                return $this;
        }

        public function getQuantidade()
        {
                return $this->quantidade;
        }

        public function setQuantidade($quantidade)
        {
                $this->quantidade[] = $quantidade;

                return $this;
        }
}
