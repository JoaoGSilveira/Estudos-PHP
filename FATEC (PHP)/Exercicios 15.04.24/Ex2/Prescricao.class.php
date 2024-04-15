<?php
class Prescricao {
    private $descricao;
    private $consulta;

    public function __construct($descricao, Consulta $consulta) {
        $this->descricao = $descricao;
        $this->consulta = $consulta;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getConsulta() {
        return $this->consulta;
    }
}
?>