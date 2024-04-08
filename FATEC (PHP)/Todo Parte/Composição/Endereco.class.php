<?php
    class Endereco
    {
        public function __construct(
            private string $cep = "",
            private string $logradouro = "",
            private string $numero = "",
            private string $bairro = "",
            private $aluno = null
        ){}

            public function getCep()
            {
                        return $this->cep;
            }

            public function setCep($cep)
            {
                        $this->cep = $cep;

                        return $this;
            }
 
            public function getLogradouro()
            {
                        return $this->logradouro;
            }

            public function setLogradouro($logradouro)
            {
                        $this->logradouro = $logradouro;

                        return $this;
            }

            public function getNumero()
            {
                        return $this->numero;
            }

            public function setNumero($numero)
            {
                        $this->numero = $numero;

                        return $this;
            }

            public function getBairro()
            {
                        return $this->bairro;
            }

            public function setBairro($bairro)
            {
                        $this->bairro = $bairro;

                        return $this;
            }

            public function getAluno()
            {
                        return $this->aluno;
            }

            public function setAluno($aluno)
            {
                        $this->aluno = $aluno;

                        return $this;
            }
    }
?>