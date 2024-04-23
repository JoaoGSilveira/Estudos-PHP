<?php

class Cartao{

    public function __construct(
        private string $titular = '',
        private float $saldo = 0,
        private string $status = 'Desativado',
        private string $msg = ''){
    }

    public function detalhes(){
        echo "Titular: {$this->getTitular()}<br>";
        echo "Saldo: {$this->getSaldo()}<br>";
        echo "Status do Cartão: {$this->getStatus()}<br>";
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

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

    public function ativarCartao(){
        $this->setStatus('Ativado');
    }

    public function desativarCartao(){
        $this->setStatus('Desativado');
    }

    public function compra($vcompra){
        if($this->getStatus() == 'Ativado'){
            if($this->getSaldo() >= $vcompra){
                $debitocompra = $this->getSaldo() - $vcompra;
                $this->setSaldo($debitocompra);
                echo "<br><br>Compra no valor de {$vcompra} realizada!<br>
                Seu novo saldo é de {$this->getSaldo()}<br><br>";
            }
            else{
                $this->setMsg('Saldo Insuficiente');
                echo "<br>Saldo Insuficiente<br>";
            }
        }
        else{
            $this->setMsg('Cartão desativado!');
        }
    }

    public function depositar($vdeposito){

        if($this->getStatus() == 'Ativado'){
            if($vdeposito > 0){
                $novoSaldo = $this->getSaldo() + $vdeposito;
                $this->setSaldo($novoSaldo);
                echo "<br>Você depositou {$vdeposito}, seu novo saldo é de {$this->getSaldo()}<br>";
            }
            else{
                $this->setMsg('<br>O valor que está tentando depositar não é válido!<br>');
            }
        }
        else{
            $this->setMsg('Cartão desativado!');
        } 
    }
}

?>