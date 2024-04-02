<?php

$contador = 0;
$i = 0;
$x = 0;
$y = 0;

echo "Laço de repetição usando WHILE<br><br>";

$n = 0;

while($n <= 15){
    echo "$n\t|\t";
    $n++;
}

$n = 20;

echo "<br><br><br>Laço de repetição usando FOR<br><br>";

for($n = 20; $i <= $n; $i++){
    echo "$i\t|\t";
}

echo "<br><br><br>Matriz em PHP <br><br>";

for($x = 1; $x <= 5; $x++){
    for($y = 1; $y <= 5; $y++){
        $contador++;
        if($contador % 2 == 0){
            echo "$contador\t|\t";
        }
        else{
            echo "x\t|\t";
        }
    }
    echo "<br>";
}

echo "<br><br><br>Desafio Numeros Impares<br><br>";

$numimpar = 0;

for($numimpar = 0; $numimpar <= 100; $numimpar++){
    if($numimpar % 2 == 0){
        continue;
    }
    echo "$numimpar\t|\t";
}

echo "<br><br><br>Desafio Tabuada<br><br>";

$multiplicador = 0;
$resultado = 0;

for($n=1; $n <= 10; $n++){
    echo "\t\t";
    for($multiplicador = 0; $multiplicador <= 10; $multiplicador++){
        $resultado = $n * $multiplicador;
        echo "$n X $multiplicador = $resultado<br>";
    }
    echo "<br><br>";
}

?>