<?php
class Consulta {
    private $dataConsulta;
    private $horario;
    private $medico;
    private $paciente;
    private $exames = [];
    private $medicamentos = [];

    public function __construct($dataConsulta, $horario, Medico $medico, Paciente $paciente) {
        $this->dataConsulta = $dataConsulta;
        $this->horario = $horario;
        $this->medico = $medico;
        $this->paciente = $paciente;
    }

    public function getDataConsulta() {
        return $this->dataConsulta;
    }

    public function getHorario() {
        return $this->horario;
    }

    public function getMedico() {
        return $this->medico;
    }

    public function getPaciente() {
        return $this->paciente;
    }

    public function getExames() {
        return $this->exames;
    }

    public function getMedicamentos() {
        return $this->medicamentos;
    }

    public function addExame(Exame $exame) {
        $this->exames[] = $exame;
    }

    public function addMedicamento(Medicamento $medicamento) {
        $this->medicamentos[] = $medicamento;
    }
}
?>