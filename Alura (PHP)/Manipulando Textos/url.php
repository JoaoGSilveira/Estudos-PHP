<?php

$url = "https://github.com/JoaoGSilveira";

if(str_starts_with($url, "https")){ //Verifica se COMEÇA com os parametros passados ao lado da variável.
    echo "O link é seguro, pois tem HTTPS!";
}
else{
    echo "O link não é seguro, pois não tem HTTPS!";
}

echo "<br><br>";

if(str_ends_with($url, "JoaoGSilveira")){   //Verifica se TERMINA com os parametros passados ao lado da variável.
    echo "Esse link É do meu perfil do GitHub!";
}
else{
    echo "Esse link NÃO é do meu perfil do GitHub!";
}

?>