<?php

require_once 'Animal.php';
require_once 'Serviço.php';
require_once 'Profissional.php';

class Atendimento {
    public $dataAtendimento;
    public $animal;
    public $servico;
    public $profissional;

    public function __construct($dataAtendimento, $animal, $servico, $profissional) {
        $this->dataAtendimento = $dataAtendimento;
        $this->animal = $animal;
        $this->servico = $servico;
        $this->profissional = $profissional;
    }

    public function getDataAtendimento() {
        return $this->dataAtendimento;
    }

    public function setDataAtendimento($dataAtendimento) {
        $this->dataAtendimento = $dataAtendimento;
    }

    public function getAnimal() {
        return $this->animal;
    }

    public function setAnimal($animal) {
        $this->animal = $animal;
    }

    public function getServico() {
        return $this->servico;
    }

    public function setServico($servico) {
        $this->servico = $servico;
    }

    public function getProfissional() {
        return $this->profissional;
    }

    public function setProfissional($profissional) {
        $this->profissional = $profissional;
    }
}
?>
