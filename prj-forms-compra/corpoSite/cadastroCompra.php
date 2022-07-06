<!DOCTYPE html>
<html>
    <head>
        <title>COMPRAS</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/layout.css">
    </head> 

    <body>
        <?php
            $nome = $_GET['txtNome'];
            $valor = $_GET['txtValor'];
            $desconto = $_GET['txtDesconto'];
            $comprador = $_GET['txtComprador'];
            $cpf = $_GET['txtCpf'];
            $categoria = $_GET['ctgProduto'];

            $total = ($valor * $desconto) / 100;
            $total = $valor - $total;
        ?>

        <div id="box-title">
            <h1> Cadastro de Produto </h1>
            <p> Preencha os campos corretamente </p>
        </div>

        <div id="box-principal">
            <?php
                switch($categoria){
                    case 1:
                        echo("<h2>CATEGORIA DO PRODUTO: Eletrônico.</h2>");
                        break;
            
                    case 2:
                        echo("<h2>CATEGORIA DO PRODUTO: Livro.</h2>");
                        break;
            
                    case 3:
                        echo("<h2>CATEGORIA DO PRODUTO: Doméstico.</h2>");
                        break;
                }

                echo("<h2> NOME DO PRODUTO: " . $nome .
                     "<br><br>VALOR: ". $valor .
                     "<br><br>DESCONTO APLICADO: " . $desconto . "%" .
                     "<br><br>VALOR COM DESCONTO: " . $total .
                     "<br><br>NOME DO COMPRADOR: " . $comprador . 
                     "<br><br>CPF: " . $cpf . "</h2>");
            ?>
        </div>
    </body>
</html>