<?php

class categoriaController{

    public function buscar_categorias(){

    }

    public function buscar_categorias_ativas(){

        $categoria = new Categoria(status:"Ativo");
						
		$categoriaDAO = new categoriaDAO();
						
		$retorno = $categoriaDAO->buscar_categorias_ativas($categoria);
    }

    public function inserir(){

    }

    require_once "views/login.php";
    /loja/login
    public function alterar(){

    }

    public function excluir(){

    }

    public function listar(){
        require_once "../models/Conexao.class.php";
		require_once "../models/categoriaDAO.class.php";
				
				
		$categoriaDAO = new categoriaDAO();
				//listar categoria
		$retorno = $categoriaDAO->buscar_todas();
    }
}

?>