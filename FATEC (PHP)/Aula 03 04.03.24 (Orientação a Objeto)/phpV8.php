<?php

    //PHP 8.
    class Cliente2
    {

        //Método construtor.
        public function __construct(private string $nome = "", private $CPF = "", private $endereco = "", private $celular = ""){}


        
        //Metodos.
        public function inserir()
        {
            return $this -> nome;
        }

        public function alterar($nome)
        {
            $this -> nome = $nome;
        }

        public function deletar()
        {
            echo "Deletar";
        }

        public function getNome()
        {
                return $this->nome;
        }
        

        /**
         * Get the value of CPF
         */ 
        public function getCPF()
        {
                return $this->CPF;
        }

        /**
         * Get the value of endereco
         */ 
        public function getEndereco()
        {
                return $this->endereco;
        }

        /**
         * Get the value of celular
         */ 
        public function getCelular()
        {
                return $this->celular;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Set the value of CPF
         *
         * @return  self
         */ 
        public function setCPF($CPF)
        {
                $this->CPF = $CPF;

                return $this;
        }

        /**
         * Set the value of endereco
         *
         * @return  self
         */ 
        public function setEndereco($endereco)
        {
                $this->endereco = $endereco;

                return $this;
        }

        /**
         * Set the value of celular
         *
         * @return  self
         */ 
        public function setCelular($celular)
        {
                $this->celular = $celular;

                return $this;
        }
    } //Fim da classe.

    //Criando objeto.
    $obj1 = new Cliente2("João", "123.456.789-89", "R. Doutor Ignácio de Almeida Prado", "(14)99617-7820");

    /*$obj1 -> nome = "João";
    $obj1 -> CPF = "123.456.789-89";
    $obj1 -> endereco = "R. Doutor Ignácio de Almeida Prado";
    $obj1 -> celular = "(14)99617-7820";*/

    echo $obj1 -> inserir();

    echo $obj1 -> alterar("Maria");


    echo "<pre>";
    var_dump($obj1);
    echo "</pre>";
?>
