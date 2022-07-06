<?php

    $multi = 1;
    $soma = 0;

    for($i = 1; $i <= 20; $i++){

        $n = $i % 2;

        if($n == 0){
            $par = $i;
            $multi = $par * $multi;
        } 

        if($n == 1){
            $impar = $i;
            $soma = $impar + $soma;
        }

    }

    echo("Soma dos números ímpares: " . $soma . " <br> Multiplicação dos números pares: " . $multi);

?>