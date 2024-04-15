<?php
class Funcionario{
    private function __construct(
    private string $nome, 
    private string $cargo = "",
    private float $salario, 
    private $chefe = null,
    private array $subordinado = array()
    ){}

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    public function getChefe()
    {
        return $this->chefe;
    }

    public function setChefe($chefe)
    {
        $this->chefe = $chefe;

        return $this;
    }

    public function getSubordinado()
    {
        return $this->subordinado;
    }

    public function setSubordinado($subordinado)
    {
        $this->subordinado[] = $subordinado;

        return $this;
    }
}

?>