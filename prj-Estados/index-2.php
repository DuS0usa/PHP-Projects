<?php

    $estados = array(
        'SP' => 'São Paulo',
        'RJ' => 'Rio de Janeiro',
        'MG' => 'Belo Horizonte',
        'BA' => 'Salvador',
        'GO' => 'Goiânia',
        'PA' => 'Belém',
        'AM' => 'Manaus',
        'SE' => 'Aracaju',
        'MT' => 'Alagoas',
        'AL' => 'Maceió'
    );

    foreach($estados as $siglas => $capitais){

        echo("<b>SIGLA:</b> " . $siglas . "  |  <b>CAPITAL:</b> " . $capitais . "<br><br>");

    }

?>
