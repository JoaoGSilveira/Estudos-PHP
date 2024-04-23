<?php

class Conta{

    public function __construct(private string $titular = '', private float $saldo = 0, private string $msg = ''){}

    public function getTitular()
    {
        return $this->titular;
    }

    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    public function getMsg()
    {
        return $this->msg;
    }

    public function setMsg($msg)
    {
        $this->msg = $msg;

        return $this;
    }

    //métodos da interface

    public function depositar($v){

    }
    public function sacar($v){

    }
    public function exibir(){
        
    }
}

?>