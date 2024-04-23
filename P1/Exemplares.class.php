<?php

class Exemplares{
        public function __construct(
            private string $nome,
            private string $editora,
        ) {}
    
        public function getNome()
        {
            return $this->nome;
        }
    
        public function setNome($nome)
        {
            $this->nome = $nome;
    
            return $this;
        }
    
        public function getEditora()
        {
            return $this->editora;
        }
     
        public function setEditora($editora)
        {
            $this->editora = $editora;
    
            return $this;
        }
    }
?>