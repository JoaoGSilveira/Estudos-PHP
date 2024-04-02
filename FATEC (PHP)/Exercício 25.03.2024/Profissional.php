<?php

require_once 'Pessoa.php';

class Profissional extends Pessoa {
    public $crmv;

    public function __construct($nome, $telefone, $crmv) {
        parent::__construct($nome, $telefone);
        $this->crmv = $crmv;
    }

    public function getCrmv() {
        return $this->crmv;
    }

    public function setCrmv($crmv) {
        $this->crmv = $crmv;
    }
}
?>
