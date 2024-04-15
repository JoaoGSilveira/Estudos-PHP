<?php

class Conta{
    public function __construct(public string $Nome, public string $cpf);

    public function getNome()
    {
        return $this->Nome;
    }

    public function setNome($Nome)
    {
        $this->Nome = $Nome;

        return $this;
    }
}

?>