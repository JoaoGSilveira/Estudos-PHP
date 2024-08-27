<?php
	
	require_once "Models/Conexao.class.php";
	require_once "Models/CursoDAO.class.php";
	require_once "Models/curso.class.php";
	
	class cursoController{
		public function listar(){
			$cursoDAO = new CursoDAO();
			$retorno = $cursoDAO->buscar_cursos();
			require_once "Views/listar_cursos.php";
		}
		
		public function inserir(){
			
			$msg = "";
			
			if($_POST){
			
			if(empty($_POST["nome"])){
					$msg = "Preencha o nome do curso!";
			}
			else{
				$curso = new Curso(nome:$_POST["nome"]);
				$cursoDAO = new CursoDAO();
				$cursoDAO->inserir_curso($curso);
				
				header("Location:index.php?controle=cursoController&metodo=listar");
			}
			}
			require_once "Views/form_curso.php";
		}
		
		public function excluir(){
			if(isset($_GET["id"])){
				$curso = new Curso($_GET["id"]);
				$cursoDAO = new cursoDAO();
				$cursoDAO->excluir($curso);
				header("Location:index.php?controle=cursoController&metodo=listar");
				die();
			}
		}
		
		public function alterar(){
			
			$msg = "";
			
			if($_POST){
				if(empty($_POST["nome"])){
					$msg = "O campo não está preenchido!!";
				}
				else{
					$curso = new Curso($_POST["idcurso"], $_POST["nome"]);
					$cursoDAO = new CursoDAO();
					$cursoDAO->alterar_curso($curso);
					header("location:index.php?controle=cursoController&metodo=listar");
				}
			}
			if(isset($_GET["id"])){
				$curso = new Curso($_GET["id"]);
				$cursoDAO = new CursoDAO();
				$retorno = $cursoDAO->buscar_um_curso($curso);
				require_once "Views/edit_curso.php";
			}
		}
	}
?>