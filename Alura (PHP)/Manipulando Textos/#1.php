<?php

$nome = "João Guilherme";

if(str_contains($nome, "Gu")){                          //str_contains Verifica se possui a string "Gu" dentro da variavel
    echo "Sim contem o que você está procurando!";      //string $nome, se tiver retorna bool true se não false.
}

else{
    echo "Não contem nada ;/";
}

?>