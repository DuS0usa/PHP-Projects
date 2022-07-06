<!DOCTYPE html>
<html>   

    <head>
        <meta charset="UTF-8">
        <title> DADOS DO USUÁRIO </title>
    </head>

    <body>
        <center>
            <?php

                $cliente = array(
                    "Nome" => $_POST["txtNome"],
                    "CPF" => $_POST["txtCpf"],
                    "Data de Nascimento" => $_POST["dtNascto"]
                );

                // print_r($cliente);

                foreach($cliente as $info => $dados){
                    echo("<h1>" . $info . ": " . $dados . "</h1><br><br>");
                }

            ?>
        </center>
    </body>
</html>