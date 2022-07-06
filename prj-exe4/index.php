<?php

    //Desenvolva um programa para calcular a potência de um número por uma base qualquer. 
    //O programa deverá realizar a leitura da base e do expoente. 

    $pot = 1;
    $base = 3;
    $expoente = 3;

    for($i = $expoente; $i >= 1; $i--){

        $pot = $pot * $base;
       
    }

    echo("Base: " . $base . "<br> Expoente: " . $expoente . "<br> Potência:" . $pot);



?>