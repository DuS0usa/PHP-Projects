<?php

    date_default_timezone_set('America/Sao_Paulo');
    $dia = date('d');
    $mes = date('m');
    $ano = date('Y');
    $hora = date('H');
    $min = date('i');
    $diaSemana = date('N');

    $semana = array("Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo");
    $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
    $mesAbrev = array("Jan", "Fev", "Mar", "Abr","Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez");


    echo("São Paulo, " . $dia . " de " . $meses[$mes-2] . " de " . $ano);
    echo("<br><br>");

    echo date('d/m/Y');
    echo("<br><br>");

    echo($semana[$diaSemana-1]. ", " . $dia . " de " . $meses[$mes-2] . " de " . $ano);
    echo("<br><br>");

    echo($dia . " " . $mesAbrev[$mes-1] . " " . $ano);
    echo("<br><br>");

    echo($dia . "/" . $mes . "/" . $ano . " " . $hora . "h" . $min);
    echo("<br><br>");

?>