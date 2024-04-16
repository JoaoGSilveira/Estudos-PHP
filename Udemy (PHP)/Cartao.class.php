<?php
class Cartao{
    public function __construct(
        private string $status,
        private string $titular,
        private float $saldo,
        private string $msg)
    {}

        public function getStatus()
        {
                return $this->status;
        }

        public function setStatus($status)
        {
                $this->status = $status;

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

        public function getMsg()
        {
                return $this->msg;
        }

        public function setMsg($msg)
        {
                $this->msg = $msg;

                return $this;
        }

        public function comprar(float $vcompra){
            if($this->getStatus() == 'Cartão Ativado'){
                if($this->getSaldo() >= $vcompra){
                    $this->setMsg('Compra no valor de ' . $vcompra . ' efetuada com sucesso!');
                    $this->setSaldo($this->getSaldo() - $vcompra);
                }
                else if($this->$vcompra < $this->getSaldo()){
                    $this->setMsg("Saldo insuficiente no catão, compra não EFETUADA!");
                }
            }
            else{
                $this->setMsg("Catão desativado!<br>Compra não EFETUADA!");
            }
        }

        public function ativarCartao(){
            $this->setStatus('Cartão Ativado');
        }

        public function desativarCartao(){
            $this->setStatus('Cartão Desativado');
        }
}
?>