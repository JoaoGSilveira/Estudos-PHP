<?php
date_default_timezone_set('America/Sao_Paulo');
	class Poupanca extends Conta
	{
		public function __construct(private int $aniversario = 0, $agencia, $numero, $saldo)
		{
			parent:: __construct($agencia, $numero, $saldo);
		}
		
		public function getAniversario()
		{
			return $this->aniversario;
		}
		
		public function setAniversario($dia)
		{
			$this->aniversario = $dia;
		}

		public function retirada($valor)
		{
			$data = date("d/m/Y");
			echo $data;
		}
	}
?>