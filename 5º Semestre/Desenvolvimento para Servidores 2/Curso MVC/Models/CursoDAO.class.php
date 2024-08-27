<?php

	class CursoDAO extends Conexao{
		public function __construct(){
			parent:: __construct();
		}
		
		public function buscar_cursos(){
			$sql = "SELECT * FROM cursos";
			try{
				
				$stm = $this->db->prepare($sql);
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
				
			}catch(PDOException $e){
				$this->db = null;
				return "Problema ao buscar os cursos"; 
			};
		}
		
		public function inserir_curso($curso){
			$sql = "INSERT INTO cursos (nome) VALUES(?)";
			try{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $curso->getNome());
				$stm->execute();
				$this->db = null;
				return "Curso inserido com sucesso";
				
			}catch(PDOException $e){
				$this->db = null;
				return "Problema ao inserir o curso!"; 
			};
		}
		
		public function excluir($curso){
			$sql = "DELETE FROM cursos WHERE id_curso = ?";
			try{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $curso->getId_curso());
				$stm->execute();
				$this->db = null;
				return "Curso DELETADO com sucesso";
				
			}catch(PDOException $e){
				$this->db = null;
				return "Problema ao DELETAR o curso!"; 
			};
		}
		
		public function buscar_um_curso($curso){
			$sql = "SELECT * FROM cursos WHERE id_curso = ?";
			try{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $curso->getId_curso());
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
				
			}catch(PDOException $e){
				$this->db = null;
				return "Problema ao buscar um curso"; 
			};
		}
		
		public function alterar_curso($curso){
			$sql = "UPDATE cursos SET nome = ? WHERE id_curso = ?";
			try{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $curso->getNome());
				$stm->bindValue(2, $curso->getId_curso());
				$stm->execute();
				$this->db = null;
				return "Alteração feita com Sucesso!!";
			}
			catch(PDOException $e){
				$this->db = null;
				return "Problema na atualização do curso";
			}
		}
	}

?>