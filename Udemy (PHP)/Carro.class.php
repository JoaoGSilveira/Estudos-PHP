<?php
class Carro{
    private $ligado, $vAtual, $vMax, $msg;

    public function __construct($vm){
        $this -> setLigado(false);
        $this -> setVatual(0);
        $this -> setVmax($vm);
    }

    // Metodos Setters
    public function setLigado($ligado){
        return $this -> ligado = $ligado;
    }

    public function setVatual($vAtual){
        return $this -> vAtual = $vAtual;
    }

    public function setVmax($vMax){
        return $this -> vMax = $vMax;
    }

    public function setMsg($msg){
        return $this -> msg = $msg;
    }

    // Metodos Getters

    public function getLigado()
    {
        return $this -> ligado
    }

    public function getVatual()
    {
        return $this->vAtual;
    }

    public function getVmax()
    {
        return $this->vMax;
    }

    public function getMsg()
    {
        return $this->msg;
    }

}
?>