<?php

class Carro{

    private $ligado, $vAtual, $vMax, $msg;

    public function __construct($vMax){
        $this->setLigado('Desligado');
        $this->setVAtual(0);
        $this->setVMax($vMax);
    }

    public function setLigado($ligado)
    {
        $this->ligado = $ligado;

        return $this;
    }

    public function setVAtual($vAtual)
    {
        $this->vAtual = $vAtual;

        return $this;
    }

    public function setVMax($vMax)
    {
        $this->vMax = $vMax;

        return $this;
    }

    public function setMsg($msg)
    {
        $this->msg = $msg;

        return $this;
    }

    public function getLigado()
    {
        return $this->ligado;
    }

    public function getVAtual()
    {
        return $this->vAtual;
    }

    public function getVMax()
    {
        return $this->vMax;
    }

    public function getMsg()
    {
        return $this->msg;
    }

    public function acelerar($vel){
        if($this->getLigado() == 'Ligado'){
            if($this->getVAtual() + $vel < $this->getVMax()){
               $this->setVAtual($this->getVAtual() + $vel);
               $this->setMsg('Acelerando...');
            }
            else{
                $this->setVAtual($this->getVMax());
                $this->setMsg('Velocidade máxima atingida!');
            }
        }
        else{
            $this->setMsg('O carro está desligado!');
        }
    }

    public function ligar(){
        $this->setLigado('Ligado');
    }

    public function desligar(){
        $this->setLigado('Desligado');
    }

    public function detalhes(){
        echo "Status: {$this->getLigado()}<br>";
        echo "Velocidade Max: {$this->getVMax()}<br>";
        echo "Velocidade Atual: {$this->getVAtual()}<br>";
        echo "Mensagem: {$this->getMsg()}<br>";
    }
}

?>