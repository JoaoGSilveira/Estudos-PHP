<?php
    class Fornecedor
    {
        public function __construct(private string $cnpj = "", private string $razao_social = ""){}
        

        public function getCnpj()
        {
                return $this->cnpj;
        }

        public function setCnpj($cnpj)
        {
                $this->cnpj = $cnpj;

                return $this;
        }

        public function getRazao_social()
        {
                return $this->razao_social;
        }

        public function setRazao_social($razao_social)
        {
                $this->razao_social = $razao_social;

                return $this;
        }
    }
?>