<?php
    
    //2.	Desenvolva uma página que a partir de três números inteiros e determine qual é o menor e qual é o maior. 
 
    $n1 = 100;
    $n2 = 120;
    $n3 = 20;

    if ($n1 > $n2 && $n1 > $n3 && $n2 < $n3){
        echo ("MAIOR " . $n1 . " MENOR " . $n2);

    } else if ($n2 > $n1 && $n2 > $n3 && $n3 < $n1){
        echo ("MAIOR " . $n2 . " MENOR " . $n3);

    } else if($n3 > $n1 && $n3 > $n2 && $n1 < $n2){
        echo ("MAIOR " . $n3 . " MENOR " . $n1);

    } else if ($n2 > $n1 && $n2 > $n3 && $n1 < $n3){
        echo ("MAIOR " . $n2 . " MENOR " . $n1);

    } else if ($n3 > $n1 && $n3 > $n2 && $n2 < $n1){
        echo ("MAIOR " . $n3 . " MENOR " . $n2);

    } else if ($n1 > $n2 && $n1 > $n2 && $n3 < $n2){
        echo ("MAIOR " . $n1 . " MENOR " . $n3);
    }



?>