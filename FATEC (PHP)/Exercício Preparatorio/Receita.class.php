<?php
    class Receita{
        public function __construct(private array $modoPreparar = []){}

        public function getModoPreparar()
        {
                return $this->modoPreparar;
        }

        public function setModoPreparar($modoPreparar)
        {
                $this->modoPreparar[] = $modoPreparar;

                return $this;
        }
    }
?>