<?php

    class Cliente{
        private $nome, $email;

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getEmail(){
            return $this->email;
        }

        public function validar($nome, $email){
            //$this->nome = $nome;
            //$this->email = $email;

            $this->setNome($nome);
            $this->setEmail($email);
        }

        public function exibir(){
            echo "Nome: {$this->getNome()}<br>";
            echo "E-mail: {$this->getEmail()}<br><br>";
        }
    }

?>