<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>COMPRAS</title>
        <link rel="stylesheet" type="text/css" href="../css/layout.css">
    </head>

    <body>
        <div id="box-title">
            <h1> Cadastro de Produto </h1>
            <p> Preencha os campos corretamente </p>
        </div>

        <div id="box-principal">
            <form method="get" action="cadastroCompra.php">
                <div id="nomeProduto">
                    <label>Nome do Produto:</label>
                    <input class="nome" type="text" id="txtNome" name="txtNome" placeholder="Digite o nome do produto.">
                </div>

                <div id="categoria">
                    <label>Categoria do Produto:</label>
                    <select class="categoria" name="ctgProduto" id="ctgProduto">
                        <option value="1">Eletrônico</option>
                        <option value="2">Livro</option>
                        <option value="3">Doméstico</option>
                    </select>
                </div>

                <fieldset>
                    <div class="valorProd1">
                        <label>Valor:</label>
                        <input type="text" id="txtValor" name="txtValor" placeholder="Valor em R$">
                    </div>

                    <div class="valorProd2">
                        <label>Desconto:</label>
                        <input type="text" id="txtDesconto" name="txtDesconto" placeholder="%" maxlength="3"> 
                    </div>
                </fieldset>

                <div class="infoComprador1">
                    <label>Nome do Comprador:</label>
                    <input type="text" id="txtComprador" name="txtComprador" placeholder="Digite o nome do Cliente.">
                </div>

                <div class="infoComprador2">
                    <label>CPF:</label>
                    <input type="text" id="txtCpf" name="txtCpf" placeholder="111.222.333-44" maxlength="14">
                </div>

                <button class="botao" type="submit">Enviar</button>
                <h6 class="format"></h6>
            </form>
        </div>
    </body>
</html>