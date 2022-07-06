<?php

    //Criar uma página que leia o salário de um funcionário e o departamento que ele trabalha. Para o departamento Operacional, o aumento será de 15%. Para o departamento de desenvolvimento deverão ser aplicadas as seguintes regras: 
    //para 1.500,00 <= salarioAtual < 1.750,00: aumento igual a 12% 
    //para 1.750,00 <= salarioAtual < 2.000,00: aumento igual a 10% 
    //para 2.000,00 <= salarioAtual < 3.000,00: aumento igual a 7% 
    //para acima de 3.000,00: aumento igual a 5%

    $dep = 2;
    $salAtual = 1700;
    $salAumentado = 0;

    if ($dep == 1){

        if ($salAtual >= 1500.00 && $salAtual < 1750.00){
            $salAumentado = ($salAtual / 100) * 12;
            $salAumentado = $salAtual + $salAumentado;
            echo("Você faz parte do Departamento de Desenvolvimento <br> Seu salário agora é de R$ " . $salAumentado . "<br>");
            echo("O ajuste foi de 12% <br> Seu salário anterior R$ " . $salAtual);

        } else if ($salAtual >= 1750.00 && $salAtual < 2000.00){
            $salAumentado = ($salAtual / 100) * 10;
            $salAumentado = $salAtual + $salAumentado;
            echo("Você faz parte do Departamento de Desenvolvimento <br> Seu salário agora é de R$ " . $salAumentado . "<br>");
            echo("O ajuste foi de 10% <br> Seu salário anterior R$ " . $salAtual);

        } else if ($salAtual >= 2000.00 && $salAtual < 3000.00){
            $salAumentado = ($salAtual / 100) * 7;
            $salAumentado = $salAtual + $salAumentado;
            echo("Você faz parte do Departamento de Desenvolvimento <br> Seu salário agora é de R$ " . $salAumentado . "<br>");
            echo("O ajuste foi de 7% <br> Seu salário anterior R$ " . $salAtual);
            
        } else if($salAtual >= 3000.00){
            $salAumentado = ($salAtual / 100) * 5;
            $salAumentado = $salAtual + $salAumentado;
            echo("Você faz parte do Departamento de Desenvolvimento <br> Seu salário agora é de R$ " . $salAumentado . "<br>");
            echo("O ajuste foi de 5% <br>Seu salário anterior R$ " . $salAtual);
        }
    }

    if ($dep == 2){

        $salAumentado = ($salAtual / 100) * 15;
        $salAumentado = $salAtual + $salAumentado;
        echo("Você faz parte do Departamento Operacional <br> Seu salário agora é de R$ " . $salAumentado . "<br>");
        echo("O ajuste foi de 15% <br> Seu salário anterior R$ " . $salAtual);
    }


?>