<?php

    //PHP 7.
    class Cliente
    {
        //Atributos.
        public $nome;
        public $CPF;
        public $endereco;
        public $celular;


        //Metodos.

        //Método construtor.
        public function __construct($nome, $CPF, $endereco, $celular){
            $this -> nome = $nome;
            $this -> CPF = $CPF;
            $this -> endereco = $endereco;
            $this -> celular = $celular;
        }

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

    } //Fim da classe.

    //Criando objeto.
    $obj1 = new Cliente("João", "245.085.988-89", "R. Doutor Ignácio de Almeida Prado", "(14)99617-7820");

    /*$obj1 -> nome = "João";
    $obj1 -> CPF = "245.085.988-89";
    $obj1 -> endereco = "R. Doutor Ignácio de Almeida Prado";
    $obj1 -> celular = "(14)99617-7820";*/

    echo $obj1 -> inserir();

    echo $obj1 -> alterar("Maria");


    echo "<pre>";
    var_dump($obj1);
    echo "</pre>";
?>
