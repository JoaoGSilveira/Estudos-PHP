<?php
class Rotas{
    private array $rotas = [];

    public function get(String $caminho, Array $dados){
        $this->rotas["GET"][$caminho] = $dados;
    }

    public function post(String $caminho, Array $dados_rota){
        $this->rotas["POST"][$caminho] = $dados_rota;
    }

    public function instancia_rota(String $metodo, String $url ){
        if(isset($this->rotas[$metodo][$url])){
            $dados_rota = $this->rotas[$metodo][$url];
			
			$classe = new $dados_rota[0];
            $metodo = $dados_rota[1];
            return $classe->$metodo();
        }
        exit("Rota Invalida");
    }
}//fim da classe

$router = new Rotas();
//rota inicio
$router->get("/", [inicioController::class, "inicio"]);
$router->get("/logout", [inicioController::class, "logout"]);
$router->get("/listar_categorias", [categoriaController::class, "listar"]);
$router->post("/login", [usuarioController::class, "login"]);

?>