<?php

$notasBimestre1 = [
    'João' => 10,
    'Maria' => 6,
    'Sergio' => 8,
    'Ana' => 5,
    'Vinicius' => 10
];

$notasBimestre2 = [
    'João' => 10,
    'Sergio' => 1,
    'Ana' => 4,
];

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($nomesAlunos, $notasAlunos));

echo "<br><br>";

var_dump(array_flip($alunosFaltantes));

?>