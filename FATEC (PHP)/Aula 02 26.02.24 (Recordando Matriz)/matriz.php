<?php
    $mat = array (array("Pedro", 15, 45.7),
                  array("Maria", 15, 45.7),
                  array("José", 15, 45.7),
                  array("Rita", 15, 45.7));

    for($i = 0; $i < 4; $i++){
        for($j = 0; $j < 3; $j++){
            echo $mat[$i][$j] . "<br>";
        }
        echo "<br><br>";
    };

    echo "<br><br>";

    //foreach dentro de foreach para mostras os valores da matriz;

    foreach($mat as $value){
        /*echo "<pre>"; 
        var_dump($value); Apenas para formatar os dados
        echo "</pre>";*/

        foreach($value as $valor){
            echo "$valor<br>";
        }
    }
?>