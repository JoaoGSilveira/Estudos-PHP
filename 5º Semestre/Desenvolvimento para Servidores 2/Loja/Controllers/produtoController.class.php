<?php

public function buscar_produtos_categoria(){
        if(isset($_GET["idcategoria"])){
        $categoria = new Categoria($_GET["idcategoria"]);
        $produto = new Produto(categoria:$categoria);
        $produtos = $produtoDAO->buscar_produtos_por_categoria($produto);
	}
}

?>