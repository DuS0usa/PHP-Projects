<?php

    $n1 = 7;
    $primo = 0;

    for($i = 1; $i <= $n1; $i++){

        if($n1 % $i == 0){
            $primo++;
        }

    }

    if($primo > 2){
        echo("O número " . $n1 . " NÃO é primo");
    } else {
        echo("O número " . $n1 . " É primo");
    }

?>