<?php
class Medico extends Pessoa {
    private $especialidade;

    public function __construct($nome, $cpf, $especialidade) {
        parent::__construct($nome, $cpf);
        $this->especialidade = $especialidade;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }
}
?>