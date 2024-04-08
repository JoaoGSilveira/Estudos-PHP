<?php
<<<<<<< HEAD

=======
>>>>>>> 7a03b2e631817bb23138916957a93bdc135e4180
    class Aluno
    {
        public function __construct(
            private string $nome = "",
            private string $cpf = "",
<<<<<<< HEAD
            private string $celular = "",
            $logradouro = "",
            $numero = "",
            $bairro = "",
            $cep = ""
        ){
            $this->endereco[] = new Endereco($logradouro, $numero, $bairro, $cep);
        }   

            public function getEndereco()
            {
                return $this->endereco;
            }

            public function setEndereco($logradouro, $numero, $bairro, $cep)
            {
                $this->endereco[] = new Endereco($logradouro, $numero, $bairro, $cep);
            }
=======
            private string $celular = ""
        ){}
>>>>>>> 7a03b2e631817bb23138916957a93bdc135e4180

            public function getNome()
            {
                        return $this->nome;
            }

            public function setNome($nome)
            {
<<<<<<< HEAD
                        $this->nome = $nome;
=======
                        $this->nome = $nome
>>>>>>> 7a03b2e631817bb23138916957a93bdc135e4180

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
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 7a03b2e631817bb23138916957a93bdc135e4180
