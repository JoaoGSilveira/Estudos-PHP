<?php

    class Exibe{
        
        private $pessoa;

        public function __construct(private string $nome = ''){
            $this->setPessoa(new Pessoa());
            $this->setNome($nome);
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

        public function getPessoa()
        {
                return $this->pessoa;
        }

        public function setPessoa($pessoa)
        {
                $this->pessoa = $pessoa;

                return $this;
        }

        public function exibe(){
            echo $this->getPessoa()->configura($this->getNome());
        }
    }