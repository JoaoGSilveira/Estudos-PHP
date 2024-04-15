<?php
class Carro{
    var $nome, $cor;

    public function validar($nome, $cor){
        $this -> nome = $nome;
        $this -> cor = $cor;
    }

    public function exibir(){
        echo "Nome:" . $this -> nome . "<br>";
        echo "Cor:" . $this -> cor . "<br>";
    }
}
?>