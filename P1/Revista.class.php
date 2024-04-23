<?php

class Revista{
    public function __construct(private int $numero){}

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }
}

?>