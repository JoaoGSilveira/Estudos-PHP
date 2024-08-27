<?php
	class Curso{
		
		public function __construct(private int $id_curso = 0, private string $nome = ""){}
		
		public function getId_curso()
		{
			return $this->id_curso;
		}
		public function getNome()
		{
			return $this->nome;
		}
	}//fim da classe
?>