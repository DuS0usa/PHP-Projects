<?php

    $cpf = $_POST['txtCpf'];

    $cpf = str_replace(".","",$cpf);
    $cpf = str_replace("-","",$cpf);

    for($i = 0; $i < (strlen($cpf)); $i++){
        $vetorCpf[$i] = substr($cpf,$i,1);
    }

    //DÍGITO 1
    $soma1 = 0;
    for($i = 0, $x = 10; $i < 9; $i++, $x--){
        $soma1 = $soma1 + ($vetorCpf[$i] * $x);
    }

    $resto = $soma1 % 11;
    
    if($resto < 2){
        $d1 = 0;
    } else if($resto >= 2){
        $d1 = 11 - $resto;
    }

    //DÍGITO 2
    $vetorCpf[9] = $d1;
    $soma2 = 0;

    for($i = 0, $x = 11; $i < 10; $i++, $x--){
        $soma2 = $soma2 + ($vetorCpf[$i] * $x);
    }

    $resto2 = $soma2 % 11;
    
    if($resto2 < 2){
        $d2 = 0;
    } else if($resto2 >= 2){
        $d2 = 11 - $resto2;
    }  

    //VALIDAÇÃO
    if($d1 == $vetorCpf[9] && $d2 == $vetorCpf[10]){
        echo("O CPF " . $cpf . " é Válido");

    } else{
        echo("O CPF " . $cpf . " é Inválido");
        
    }
    echo("<br><a href='index.php'>Voltar</a>");













?>