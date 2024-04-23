<?php

require_once 'Pessoa.class.php';

class Socio extends Pessoa{

    public function __construct(
        $nome = '',
        private string $celular = '', 
        private string $email = '', 
        private string $cpf = ''){

        parent:: __construct($nome);
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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}

?>