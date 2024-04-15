<?php
class Paciente extends Pessoa {
    private $convenio;

    public function __construct($nome, $cpf, $convenio) {
        parent::__construct($nome, $cpf);
        $this->convenio = $convenio;
    }

    public function getConvenio() {
        return $this->convenio;
    }
}
?>