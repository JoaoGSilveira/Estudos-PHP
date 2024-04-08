<?php
    class Aluno
    {
        public function __construct(
            private string $nome = "",
            private string $cpf = "",
            private string $celular = ""
        ){}

            public function getNome()
            {
                        return $this->nome;
            }

            public function setNome($nome)
            {
                        $this->nome = $nome

                        return $this;
            }

            public function getCpf()
            {
                        return $this->cpf;
            }

            public function setCpf($cpf)
            {
                        $this->cpf = $cpf;

                        return $this;
            }

            public function getCelular()
            {
                        return $this->celular;
            }
            
            public function setCelular($celular)
            {
                        $this->celular = $celular;

                        return $this;
            }
    }
?>