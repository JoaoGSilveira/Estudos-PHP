<?php
require_once 'Pessoa.class.php';
require_once 'Telefone.class.php';
require_once 'Paciente.class.php';
require_once 'Medico.class.php';
require_once 'Consulta.class.php';
require_once 'Exame.class.php';
require_once 'Medicamento.class.php';
require_once 'Prescricao.class.php';

$telefone = new Telefone("11", "99618-2921");

$paciente = new Paciente("João Silva", "123.456.789-10", "Unimed");
$paciente->addTelefone($telefone);

$medico = new Medico("Dr. Ana Maria", "222.222.222-22", "Cardiologia");
$medico->addTelefone($telefone);

$consulta = new Consulta("2022-12-01", "14:00", $medico, $paciente);

$exame = new Exame("Exame de Sangue", "Jejum de 12 horas");
$consulta->addExame($exame);

$medicamento = new Medicamento("Valsartana" , "Vermelha" , "Tomar 1 comprimido por dia");
$consulta->addMedicamento($medicamento);

$prescricao = new Prescricao("Tomar o medicamento após as refeições", $consulta);

echo "Prescrição: " . $prescricao->getDescricao() . "<br>";
echo "Consulta: " . $prescricao->getConsulta()->getDataConsulta() . " " . $prescricao->getConsulta()->getHorario() . "<br>";
echo "Médico: " . $prescricao->getConsulta()->getMedico()->getNome() . "<br>";
echo "Paciente: " . $prescricao->getConsulta()->getPaciente()->getNome() . "<br>";
echo "Exames: ";
foreach ($prescricao->getConsulta()->getExames() as $exame) {
    echo $exame->getNome();
}
echo "<br>Medicamentos: ";
foreach ($prescricao->getConsulta()->getMedicamentos() as $medicamento) {
    echo $medicamento->getNome();
}
echo "<br>";
?>
